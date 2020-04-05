<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Quiz;

class QuizController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
	
	public function show(Quiz $quiz)
	{
        $quiz->load('questions.answers.responses');
		return view('quiz.show',compact('quiz'));
	}

    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
        return redirect()->route('home');
    }
}
