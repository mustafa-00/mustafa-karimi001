<?php

namespace App\Http\Controllers\admin\pricing;

use App\Http\Controllers\Controller;
use App\Models\Pricings;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pricings = Pricings::all();
        return view('admin.pricing.pricing',compact('pricings'));
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
            'tittle' => 'required|min:10|max:255',
            'price' => 'required|min:1|max:255',
            'description' => 'required|min:10|max:255'
        ]);

        // dd($request->all());
        Pricings::create($request->all());
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
        Pricings::find($id)->delete();
        session()->flash('error','Record has been deleted successfuly!');
        return back();
    }
}
