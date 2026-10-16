<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdsReportController extends Controller
{
    public function adsReport(): View
    {
        return view('admin.ads_report');
    }
}
