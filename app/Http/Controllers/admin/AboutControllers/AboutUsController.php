<?php

namespace App\Http\Controllers\admin\AboutControllers;

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
        // 4:displaying data in the data table------------
        $aboutus = AboutUs::all();
        return view('admin.about.AboutUs', compact('aboutus'));
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
            'tittle' => 'required|min:3|max:255',
            'description' => 'required|min:5|max:255',
            'icon' => 'required|min:1|max:255',
            'Subtittle' => 'required|min:3|max:255',
            'Subdescription' => 'required|min:5|max:255'

        ]);

        // 2:storing data into database--------------
        AboutUs::create($request->all());
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
    public function destroy(string $id)
    {
        // dd($id);

        AboutUs::find($id)->delelte();
        return back();
    }
}
