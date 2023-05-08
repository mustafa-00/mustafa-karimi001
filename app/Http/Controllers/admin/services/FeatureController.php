<?php

namespace App\Http\Controllers\admin\services;

use App\Http\Controllers\Controller;
use App\Models\Features;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $features = Features::all();
        return view('admin.servicess.feature',compact('features'));
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
        $request->validate([
            'photo' => 'required',
            'tittle' => 'required|min:5|max:255',
            'description' => 'required|min:10|max:255',
            'markeddescription' => 'required|min:10|max:255'
        ]);
        // dd($request->all());

        $feature = new Features();
        $feature['tittle'] = $request->tittle;
        $feature['description'] = $request->description;
        $feature['markeddescription'] = $request->markeddescription;
        if($request->photo){
            date_default_timezone_set("Asia/Kabul");
            $fileName = 'feature_'.date('Ymd-His').'_'.rand(10,100000).'.'.$request->photo->extension();
            $request->photo->storeAs('public/feature',$fileName);
            $feature['photo'] = "/storage/feature/$fileName";
        }
        $feature->save();
        session()->flash('success','Record has been saved successfuly!');
        return redirect('admin/feature');

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
        //
    }
}
