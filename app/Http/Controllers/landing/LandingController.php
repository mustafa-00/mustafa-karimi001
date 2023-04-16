<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Featured;
use App\Models\Action;
use App\Models\Question;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        //4:we get the data from database and display that to the landing page------------
        $action = Action::all();
        return view('landing.home_index', compact('action'));
    }

    public function about()
    {

        $question = Question::all();
        $aboutus = AboutUs::all();
        return view('landing.about.about_index', compact('aboutus','question'));
    }

    public function services()
    {
        $question = Question::all();
        $featured = Featured::all();
        $aboutus = AboutUs::all();
        return view('landing.servicess.service_index', compact('featured','question','aboutus'));
    }

    // public function packing()
    // {
    //     return view('landing.packing');
    // }

    public function pricing()
    {
        return view('landing.pricing.pricing_index');
    }

    public function contact()
    {
        return view('landing.contact.contact_index');
    }
}
