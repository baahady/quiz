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

    public function store(Quiz $quiz)
    {
    	$data = request()->validate([
            'question.question'=>'required',
            'answers.*.answer'=>'required'
        ]);
        
        $question = $quiz->questions()->create($data['question']);
        $question->answers()->createMany($data['answers']);
        return redirect('quizzes/'.$quiz->id);
    }
}
