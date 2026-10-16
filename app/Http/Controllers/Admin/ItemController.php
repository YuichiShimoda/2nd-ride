<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Maker;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Carbon;
use App\Http\Requests\ItemStoreRequest;
use App\Http\Requests\ItemUpdateRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
// use Intervention\Image\Drivers\Imagick\Driver;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $item = Item::all();
        return view('admin.item.index', compact('item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $category = Category::all();
        return view('admin.item.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ItemStoreRequest $request): RedirectResponse
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $uploadedFile = $request->file('image');
            $manager = new ImageManager(new Driver());
            $image = $manager->read($uploadedFile->getRealPath());

            $image->scaleDown(width: 1000);
            $originalFileNameWithoutExt = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = Str::slug($originalFileNameWithoutExt) . '-' . time() . '.webp';
            $path = 'image/uploader/' . $fileName;
            Storage::disk('public_uploads')->put($path, $image->toWebp());
        }
        $item = new Item();
        $item->appraisal_id = $request->appraisal_id;
        $item->title = $request->title;
        $item->image = $fileName;
        $item->category = $request->category;
        $item->condition_customer = $request->condition_customer;
        $item->condition_seller = $request->condition_seller;
        $item->brand = $request->brand;
        $item->maker = $request->maker;
        $item->price = $request->price;
        $item->is_visible = $request->has('is_visible') ? 1 : 0;
        $item->memo = $request->memo;
        $item->save();
        return redirect()->route('admin.item.index')->with('success', '登録完了');
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item): View
    {
        return view('admin.item.show',compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Item $item): View
    {
        $category = Category::all();
        return view('admin.item.edit', compact('item', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ItemUpdateRequest $request, Item $item): RedirectResponse
    {
        $data = $request->validated();

        $item->title = $request->title;
        $item->category = $request->category;
        $item->condition_customer = $request->condition_customer;
        $item->condition_seller = $request->condition_seller;
        $item->brand = $request->brand;
        $item->maker = $request->maker;
        $item->price = $request->price;
        $item->is_visible = $request->has('is_visible') ? 1 : 0;
        $item->memo = $request->memo;
        $item->save();

        return redirect()->route('admin.item.index')->with('success','更新完了');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item): RedirectResponse
    {
        $item->delete();
        return redirect()->route('admin.item.index')->with('success','削除完了');
    }

    public function searchBrand(Request $request)
    {
        $query = $request->input('query');
        $hiragana = mb_convert_kana($query, 'c');
        $katakana = mb_convert_kana($query, 'C');

        $brands = Brand::where(function($q) use ($query, $katakana, $hiragana) {
            $q->where('name', 'like', "%{$query}%")
                ->orWhere('name', 'like', "%{$katakana}%")
                ->orWhere('name', 'like', "%{$hiragana}%");
        })->select('name')->limit(6)->get();
        // $brands = Brand::where('name', 'like', "%{$query}%")->select('id', 'name')->limit(10)->get();
        return response()->json($brands);
    }

    public function searchMaker(Request $request)
    {
        $query = $request->input('query');
        $hiragana = mb_convert_kana($query, 'c');
        $katakana = mb_convert_kana($query, 'C');

        $makers = Maker::where(function($q) use ($query, $katakana, $hiragana) {
            $q->where('name', 'like', "%{$query}%")
                ->orWhere('name', 'like', "%{$katakana}%")
                ->orWhere('name', 'like', "%{$hiragana}%");
        })->select('name')->limit(6)->get();
        // $makers = Maker::where('name', 'like', "%{$query}%")->select('id', 'name')->limit(10)->get();
        return response()->json($makers);
    }
}