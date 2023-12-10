<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Report;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', [
            'answers' => Answer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $answers = $request->validate([
            'content' => 'required',
            'image' => 'nullable'
        ]);
        $answers['user_id'] = auth()->user()->id;

        Answer::create($answers);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateAnswer = $request->validate([
            'content' => 'required',
            'image' => 'nullable'
        ]);
        Answer::where('id', $id)->update($updateAnswer);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reports = Report::where('answer_id', $id)->get();

        // hapus semua report yang terkait
        foreach ($reports as $report) {
            $report->delete();
        }
        
        Answer::destroy($id);
        return redirect()->back();
    }
}
