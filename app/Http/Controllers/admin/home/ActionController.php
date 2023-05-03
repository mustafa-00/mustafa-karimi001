<?php

namespace App\Http\Controllers\admin\home;

use App\Http\Controllers\Controller;
use App\Models\Action;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $actions = Action::all();
        return view('admin.home.action',compact('actions'));
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
        $request->validate([
            'tittle' => 'required|min:5|max:20',
            'description' => 'required|min:10|max:255'
        ]);

        Action ::create($request->all());
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
        Action::find($id)->delete();
        session()->flash('success','Record has been deleted successfuly!');
        return back();

    }
}
