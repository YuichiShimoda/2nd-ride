<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Appraisal;
use App\Models\Item;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Mail;

class FrontController extends Controller
{
    public function __construct() {
    }

    public function top(): View
    {
        return view('top');
    }

    public function result(Request $request): View
    {
        return view('result');
    }

    public function faq(Request $request): View
    {
        return view('faq');
    }

    public function profile(Request $request): View
    {
        return view('profile');
    }

    public function voice(Request $request): View
    {
        return view('voice');
    }

    public function rule(Request $request): View
    {
        return view('rule');
    }

    public function policy(Request $request): View
    {
        return view('policy');
    }
}
