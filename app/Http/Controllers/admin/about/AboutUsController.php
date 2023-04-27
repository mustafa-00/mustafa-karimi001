<?php

namespace App\Http\Controllers\admin\about;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 4:displaying data into admin/aboutus data table-------------
        $abouts = AboutUs::all();
        return view('admin.about.aboutus',compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // 1:validation part-----------------
        $request->validate([
            'icon' => 'required|min:5|max:255',
            'tittle' => 'required|min:5|max:255',
            'description' => 'required|min:10|max:255'
        ]);


        // 2:storing data into database--------------
        AboutUs::create($request->all());
        session()->flash('success','Record has been saved successfuly!');
        return back();

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
    public function edit(AboutUs $about)
    {
        // dd($id);
        $abouts = AboutUs::all();
        return view('admin.about.aboutus' , compact('about','abouts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutUs $about)
    {
        $about ->update([
            'icon' => $request->icon,
            'tittle' => $request->tittle,
            'description' => $request->description
        ]);
        session()->flash('success','Record has been edited succesfuly!');
        return redirect('admin/aboutus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        // deleteing data from database---------------
        AboutUs::find($id)->delete();
        session()->flash('error','Record has been deleted successfuly!');
        return back();
    }
}
