<?php

namespace App\Http\Controllers\admin\contact;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use App\Models\Question;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contacts::all();
        return view('admin.contact.contact',compact('contacts'));
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
            'icon' => 'required',
            'tittle' => 'required|min:5|max:255',
            'description' => 'required|min:10|max:255'
        ]);

        Contacts::create($request->all());
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
    public function edit(Contacts $contact)
    {
        $contacts = Contacts::all();
        return view('admin.contact.contact',compact('contact','contacts'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contacts $contact)
    {
        $contact->update([
            'icon' => $request->icon,
            'tittle' => $request->tittle,
            'description' => $request->description
        ]);
        session()->flash('success','Record has been Updated successfuly!');
        return redirect('admin/contact');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contacts::find($id)->delete();
        session()->flash('success','Record has been Deleted successfuly!');
        return back();

    }
}
