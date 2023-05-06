<?php

namespace App\Http\Controllers\admin\pricing;

use App\Http\Controllers\Controller;
use App\Models\Hpricing;
use Illuminate\Http\Request;

class HpricingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hprices = Hpricing::all();
        return view('admin.pricing.hpricing',compact('hprices'));
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
            'tittle' => 'required|min:5|max:255',
            'price' => 'required|min:1|max:255',
            'markeddescription' => 'required|min:5|max:255',
            'unmarkeddescription' => 'required|min:5|max:255'
        ]);

        // dd($request->all());

        Hpricing::create($request->all());
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
