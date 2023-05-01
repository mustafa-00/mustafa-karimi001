<?php

namespace App\Http\Controllers\admin\about;

use App\Http\Controllers\Controller;
use App\Models\Team_members;
use Illuminate\Http\Request;

class Team_membersConroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team_memberses = Team_members::all();
        return view('admin.about.Team_members.team',compact('team_memberses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.Team_members.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'photo' => 'required',
            'name' => 'required|min:10|max:255',
            'field' => 'required|min:10|max:255',
            'description' => 'required|min:10|max:255'
        ]);

        $team_members = new Team_members();
        $team_members['name'] = $request->name;
        $team_members['field'] = $request->field;
        $team_members['description'] = $request->description;

        if($request->photo){
            date_default_timezone_set("Asia/Kabul");
            $fileName = 'team_members_'.date('Ymd-His').'_'.rand(10,100000).'.'.$request->photo->extension();
            $request->photo->storeAs("public/team_members",$fileName);
            $team_members['photo'] = "storage/team_members/$fileName";
        }
        $team_members->save();
        session()->flash('success','Record has been saved successfuly!');
        return redirect('admin/team_members');

        // dd($request->all());
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
    public function destroy(Team_members $team_members)
    {
        @unlink(public_path().'/'.$team_members->photo);
        $team_members->delete();
        session()->flash('error','Record has been deleted successfuly!');
        return back();
    }
}
