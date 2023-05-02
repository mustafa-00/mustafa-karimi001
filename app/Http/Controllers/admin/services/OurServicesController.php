<?php

namespace App\Http\Controllers\admin\services;

use App\Http\Controllers\Controller;
use App\Models\OurServices;
use Illuminate\Http\Request;

class OurServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.servicess.OurServices.ourservices');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.servicess.OurServices.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validation-------------------
        $request->validate([
            'photo' => 'required',
            'tittle' => 'required|min:10|max:255',
            'description' => 'required|min:10|max:255'
        ]);

        // dd($request->all());
        $OurService = new OurServices();
        $OurService['tittle'] = $request->tittle;
        $OurService['description'] = $request->description;
        if($request->photo){

            date_default_timezone_set("Asia/Kabul");
            $fileName = 'OurService_'.date('Ymd-His').'_'.rand(10,10000).'.'.$request->photo->extension();
            $request->photo->storeAs('public/OurSerivce',$fileName);
            $OurService['photo'] = "storage/OurService,$fileName";
        }
        $OurService->save();
        session()->flash('success','Record has been saved successfuly!');
        return redirect('admin/ourservices');


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
