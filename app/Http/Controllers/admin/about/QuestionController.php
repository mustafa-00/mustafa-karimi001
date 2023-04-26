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
        $questions = Question::all();
        return view('admin.about.question',compact('questions'));
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
    public function edit(Question $question)
    {
        // dd($id);
        $questions = Question::all();
        return view('admin.about.question' , compact('question','questions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question)
    {
        $question->update([
            'question' => $request->question,
            'answer' => $request->answer
        ]);
        session()->flash('success','Record has been updated succesfuly!');
        return redirect('admin/question');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // 4:deleteing button------------
        Question::find($id)->delete();
        session()->flash('error','Record has been deleted successfuly!');
        return back();
    }
}
