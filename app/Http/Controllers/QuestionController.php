<?php

namespace App\Http\Controllers;

use App\Example;
use App\Http\Requests\StoreQuestion;
use App\Question;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $placeholder = $this->newExample();


        $questions = Question::orderBy('created_at', 'DESC')->get();

        return view('question.index', compact('questions', 'placeholder'));

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
    public function store(StoreQuestion $request)
    {


        $validated = $request->validated();



        Question::create([
            'question_text' => $validated['question_text']
        ]);


        $placeholder = $this->newExample();
        $questions = Question::with('answers')->get();
        return redirect('/Question');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
        $answers = $question->answers();


        return view('question.show', compact('question', 'answers'));




    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }

    private function newExample(){
        $example = new Example;
        return $example->randomExample();
    }
}
