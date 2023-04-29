<?php

namespace App\Http\Controllers\admin\about;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('admin.about.Testimonial.testimonial' , compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.Testimonial.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $testimonial = new Testimonial();
        $testimonial['name'] = $request->name;
        $testimonial['job'] = $request->job;
        $testimonial['description'] = $request->description;

        if($request->photo){
            date_default_timezone_set("Asia/Kabul");
            $fileName = 'testimonial_'.date('Ymd-His').'_'.rand(10,100000).'.'.$request->photo->extension();
            $request->photo->storeAs('public/testimonial',$fileName);
            $testimonial['photo'] = "/storage/testimonial/$fileName";
        }
        // dd('photo');
        $testimonial->save();
        session()->flash('success','Record has been saved successfuly!');
        return redirect('admin/testimonial');


        // dd($request->all());
        // $request->validate([
        //     'photo' => 'required',
        //     'name' => 'required|min:10|max:255',
        //     'job' => 'required|min:10|max:255',
        //     'description' => 'required|min:10|max:255'
        // ]);

        // Testimonial::create($request->all());
        // session()->flash('success','Record has been saved successfuly!');
        // return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        @unlink($testimonial->photo);
        $testimonial->delete();
        session()->flash('error','Record has been deleted successfuly!');
        return back();
    }
}
