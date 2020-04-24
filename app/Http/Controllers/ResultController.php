<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {     
        $results = auth()->user()->takeparts()
        ->with('quiz.questions.answers.responses.answer')
        ->with('quiz.questions.answers.correct.answer')
        ->get();
        
        return view('result.show')->with('results',$results);
    }
}
