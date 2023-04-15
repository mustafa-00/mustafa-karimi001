<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\Featured;
use App\Models\Action;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        //4:we get the data from database and display that to the landing page------------
        $action = Action::all();
        return view('landing.index', compact('action'));
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
