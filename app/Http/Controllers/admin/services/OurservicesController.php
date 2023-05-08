<?php

namespace App\Http\Controllers\admin\services;

use App\Http\Controllers\Controller;
use App\Models\Ourservices;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class OurservicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ourservices = Ourservices::all();
        return view('admin.servicess.ourservices',compact('ourservices'));
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
            'description' => 'required|min:10|max:255'
        ]);
        // dd($request->all());

        $ourservice = new Ourservices();
        $ourservice['tittle'] = $request->tittle;
        $ourservice['description'] = $request->description;
        if($request->photo){
            date_default_timezone_set("Asia/Kabul");
            $fileName = 'ourservice_'.date('Ymd-His').'_'.rand(10,100000).'.'.$request->photo->extension();
            $request->photo->storeAs('public/ourservice',$fileName);
            $ourservice['photo'] = "/storage/ourservice/$fileName";

        }
        // dd('photo');
        $ourservice->save();
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
    public function edit(Ourservices $ourservice)
    {
        // dd($id);
        $ourservices = Ourservices::all();
        return view('admin.servicess.ourservices',compact('ourservice','ourservices'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ourservices $ourservice)
    {
        $ourservice = new Ourservices();
        $ourservice['tittle'] = $request->tittle;
        $ourservice['description'] = $request->description;
        if($request->photo){
            date_default_timezone_set("Asia/Kabul");
            $fileName = 'ourservice_'.date('Ymd-His').'_'.rand(10,100000).'.'.$request->photo->extension();
            $request->photo->storeAs('public/ourservice',$fileName);
            $ourservice['photo'] = "/storage/ourservice/$fileName";

        }
        // dd('photo');
        $ourservice->save();
        session()->flash('success','Record has been saved successfuly!');
        return redirect('admin/ourservices');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ourservices $ourservice)
    {
        @unlink(public_path().'/'.$ourservice->photo);
        $ourservice->delete();
        session()->flash('success','Record has been deleted successfuly!');
        return back();
    }
}
