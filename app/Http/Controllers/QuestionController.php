<?php

namespace App\Http\Controllers;

use App\Example;
use App\Http\Requests\StoreQuestionRequest;
use App\Question;
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

        $questions = Question::all();
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
    public function store(Request $request)
    {
        $rules = [
            'question_text' => 'required|min:5|ends_with:?'
        ];
        $messages = [
            'required' => 'Question cannot be blank.',
            'min' => 'It needs to be a little longer than that (5 characters minimum).',
            'ends_with' => 'A proper question ends with a \'?\', and we are nothing but proper vegans here.'

        ];

        $validator = Validator::make($request->all(),$rules, $messages);
        if($validator->fails()){
            return redirect(\route('question.index'))
                ->withErrors($validator)
                ->withInput();
        }


        Question::create([
            'question_text' => $request->question_text
        ]);


        $placeholder = $this->newExample();
        $questions = Question::all();
        return view('question.index', compact('questions', 'placeholder'));

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
