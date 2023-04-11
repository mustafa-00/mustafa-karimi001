<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Featured;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing.index');
    }

    public function about()
    {
        return view('landing.about');
    }

    public function services()
    {
        $featured = Featured::all();
        return view('landing.services', compact('featured'));
    }

    // public function packing()
    // {
    //     return view('landing.packing');
    // }

    public function pricing()
    {
        return view('landing.pricing');
    }

    public function contact()
    {
        return view('landing.contact');
    }
}
