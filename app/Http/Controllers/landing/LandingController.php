<?php

namespace App\Http\Controllers\landing;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Featured;
use App\Models\Action;
use App\Models\Contacts;
use App\Models\Features;
use App\Models\Hpricing;
use App\Models\Pricings;
use App\Models\Question;
use App\Models\Team_members;
use App\Models\Testimonial;
use App\Models\Ourservices;
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
        $testimonial = Testimonial::all();
        $team_members = Team_members::all();
        return view('landing.about.about_index', compact('aboutus','question','testimonial','team_members'));
    }

    public function services()
    {
        $question = Question::all();
        $featured = Featured::all();
        $aboutus = AboutUs::all();
        $ourservice = Ourservices::all();
        $feature = Features::all();
        return view('landing.servicess.service_index', compact('featured','question','aboutus','ourservice','feature'));
    }

    // public function packing()
    // {
    //     return view('landing.packing');
    // }

    public function pricing()
    {
        $pricing = Pricings::all();
        $hprices = Hpricing::all();
        return view('landing.pricing.pricing_index',compact('pricing','hprices'));
    }

    public function contact()
    {
        $contact = Contacts::all();
        return view('landing.contact.contact_index',compact('contact'));
    }
}
