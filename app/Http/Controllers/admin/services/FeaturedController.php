<?php

namespace App\Http\Controllers\admin\services;

use App\Http\Controllers\Controller;
use App\Http\Requests\FeaturedValidation;
use App\Models\Featured;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class FeaturedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $featureds = Featured::all();
        return view('admin.servicess.featured' , compact('featureds'));
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
    public function store(FeaturedValidation $request)
    {
        Featured::create($request->all());
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
    public function edit(Featured $featured)
    {
        // dd($featured);
        $featureds = Featured::all();
        return view('admin.servicess.featured', compact('featured','featureds'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Featured $featured)
    {
        // dd($request->all());
        $featured->update([
            'icon' => $request->icon,
            'tittle' => $request->tittle,
            'description' => $request->description
        ]);
        session()->flash('success','Record has been updated successfuly!');
        return redirect('admin/featured');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        Featured::find($id)->delete();
        session()->flash('error','Record has been deleted successfuly!');
        return back();
    }
}
