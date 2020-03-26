<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function create()
    {
    	return view('quiz.create');
    }

    public function store()
    {
    	$data = request()->validate([
    		'title' => 'required',
    		'description' => 'required'
    	]);

    	$quiz = auth()->user()->quizzes()->create($data);

    	return redirect('/quizzes/'.$quiz->id);
    }
}
