<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Quiz;
use \App\Question;
use \App\Correct;

class QuestionController extends Controller
{
    public function __cunstruct()
    {
        $this->middleware('auth');
    }
    
    public function create(Quiz $quiz)
    {
    	return view('question.create',compact('quiz'));
    }

    public function store(Quiz $quiz)
    {
        // echo request()->correct['correct'];
        // foreach(request()->answers as $answer){
        //    echo $answer['answer'];
        // }

    	$data = request()->validate([
            'question.question'=>'required',
            'correct.correct'=>'required|integer',
            'answers.*.answer'=>'required'
        ]);
        
        $question = $quiz->questions()->create($data['question']);
        for($i=0;$i<=3;$i++)
        {
            $answers = $question->answers()->create($data['answers'][$i]);
            if($i==request()->correct['correct']){
                Correct::create([
                    'question_id' => $question->id,
                    'answer_id' => $answers->id
                ]);
            }
        }
        
        return redirect('quizzes/'.$quiz->id);
    }

    public function destroy(Quiz $quiz, Question $question)
    {
        $question->answers()->delete();
        $question->delete();

        return redirect($quiz->path());
    }
}
