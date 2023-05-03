<?php

namespace App\Http\Controllers\admin\home;

use App\Http\Controllers\Controller;
use App\Models\Action;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        //3:we are getting data from model and then we will display that on the table-----------------
        $actions = Action::all();
        return view('admin.home.action', compact('actions'));

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

        //1:validation section-------------------
        $request->validate([
            'tittle' => 'required|min:5|max:255',
            'description' => 'required|min:10|max:255'
        ]);

        // 2:storing data into database---------------------
        Action::create($request->all());
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
    public function edit(Action $action)
    {
        // dd($id);
        $actions = Action::all();
        return view('admin.home.action',compact('action','actions'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        Action::find($id)->delete();
        session()->flash('error','Record has been deleted successfuly!');
        return back();
    }
}
