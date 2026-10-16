<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AnalyticsController extends Controller
{
    public function lpAnalytics(): View
    {
        return view('admin.lp.analytics');
    }

    public function hpAnalytics(): View
    {
        return view('admin.hp.analytics');
    }
}
