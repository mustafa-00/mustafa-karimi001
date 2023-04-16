<?php

namespace App\Http\Controllers\admin\about;

use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 3:displaying data in question datatable-------------
        $question = Question::all();
        return view('admin.about.question',compact('question'));
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

        // 1:validation part-------------------
        $request->validate([
            'question' => 'required|min:10|max:255',
            'answer' => 'required|min:10|max:255'
        ]);

        // 2:storing data into database--------------------
        Question::create($request->all());
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
        // 4:deleteing button------------
        Question::find($id)->delete();
        return back();
    }
}
