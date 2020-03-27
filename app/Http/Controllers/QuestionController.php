<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Quiz;

class QuestionController extends Controller
{
    public function create(Quiz $quiz)
    {
    	return view('question.create',compact('quiz'));
    }

    public function store()
    {
    	$data = request()->validate([
    		'question.question'=>'required'
    	]);
    }
}
