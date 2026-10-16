<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appraisal;
use App\Models\Item;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\AppraisalStoreRequest;
use App\Http\Requests\AppraisalUpdateRequest;

class AppraisalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $appraisal = Appraisal::all();
        return view('admin.appraisal.index', compact('appraisal'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        do {
            $ticket_number = str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);
            $exists = Appraisal::where('ticket_number', $ticket_number)->exists();
        } while ($exists);
        return view('admin.appraisal.create', compact('ticket_number'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AppraisalStoreRequest $request): RedirectResponse
    {
        $data = $request->validated();
        $appraisal = new Appraisal();
        $appraisal->ticket_number = $request->ticket_number;
        $appraisal->status = $request->status;
        $appraisal->first_contact_at = $request->deadline;
        $appraisal->staff = $request->staff;
        $appraisal->area = $request->area;
        $appraisal->family_name = $request->family_name;
        $appraisal->tel1 = $request->tel1;
        $appraisal->tel2 = $request->tel2;
        $appraisal->tel3 = $request->tel3;
        $appraisal->memo = $request->memo;
        $appraisal->experienced = $request->experienced;
        $appraisal->hope_request = $request->hope_request;
        $appraisal->sms_log = $request->sms_log;
        $appraisal->comment = $request->comment;
        $appraisal->save();
        return redirect()->route('admin.appraisal.index')->with('success', '登録完了');
    }

    /**
     * Display the specified resource.
     */
    public function show(Appraisal $appraisal): View
    {
        $items = Item::where("appraisal_id", $appraisal->id)->get();
        return view('admin.appraisal.show',compact('appraisal', 'items'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Appraisal $appraisal): View
    {
        $items = Item::where("appraisal_id", $appraisal->id)->get();
        return view('admin.appraisal.edit',compact('appraisal', 'items'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AppraisalUpdateRequest $request, Appraisal $appraisal): RedirectResponse
    {
        $data = $request->validated();

        $appraisal->status = $request->status;
        $appraisal->first_contact_at = $request->first_contact_at;
        $appraisal->staff = $request->staff;
        $appraisal->sms_log = $request->sms_log;
        $appraisal->comment = $request->comment;
        $appraisal->update();

        return redirect()->route('admin.appraisal.index')->with('success','更新完了');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Appraisal $appraisal): RedirectResponse
    {
        $appraisal->delete();
        return redirect()->route('admin.appraisal.index')->with('success','削除完了');
    }
}