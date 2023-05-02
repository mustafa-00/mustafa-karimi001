<?php

namespace App\Http\Controllers\admin\contact;

use App\Http\Controllers\Controller;
use App\Models\Pricings;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.contact.index');
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
            'icon' => 'required|min:5|max:255',
            'tittle' => 'required|min:10|max:255',
            'description' => 'required|min:10|max:255'
        ]);

        Pricings::Create($request->all());
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
