<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $category = Category::all();
        return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $order = Category::all()->count() + 1;
        return view('admin.category.create', compact('order'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryStoreRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $category = new Category();
        $category->name = $request->name;
        $category->furigana = $request->furigana;
        $category->order = $request->order;
        $category->save();
        return redirect()->route('admin.category.index')->with('success', '登録完了');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category): View
    {
        return view('admin.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category): View
    {
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, Category $category): RedirectResponse
    {
        $data = $request->validated();

        $category->name = $request->name;
        $category->furigana = $request->furigana;
        $category->update();

        return redirect()->route('admin.category.index')->with('success','更新完了');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category): RedirectResponse
    {
        $category->delete();
        return redirect()->route('admin.category.index')->with('success','削除完了');
    }
}