<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Quiz;
use \App\Question;

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
            'correct.correct'=>'required|integer',
            'answers.*.answer'=>'required'
        ]);
        
        $question = $quiz->questions()->create($data['question']);
        $question->correct()->create($data['correct']);
        $question->answers()->createMany($data['answers']);
        return redirect('quizzes/'.$quiz->id);
    }

    public function destroy(Quiz $quiz, Question $question)
    {
        $question->answers()->delete();
        $question->delete();

        return redirect($quiz->path());
    }
}
