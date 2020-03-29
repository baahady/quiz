<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;

class TakepartController extends Controller
{
    public function show(Quiz $quiz,$slug)
    {
        $quiz->load('questions.answers');
        return view('takepart.show',compact('quiz'));
    }

    public function store(Quiz $quiz)
    {
    	// dd(request()->all());
    	$data = request()->validate([
    		'responses.*.answer_id' => 'required',
    		'responses.*.question_id' => 'required',
    		'takepart.name' => 'required',
    		'takepart.email' => 'required|email'
    	]);

    	$takepart = $quiz->takeparts()->create($data['takepart']);
    	$takepart->responses()->createMany($data['responses']);

    	return redirect($quiz->path());
    }
}
