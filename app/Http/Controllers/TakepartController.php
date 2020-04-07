<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\User;
use App\Takepart;
class TakepartController extends Controller
{
    public function show(Quiz $quiz,$slug)
    {
		if($quiz->questions->count()==0){
			return redirect('/quizzes/'.$quiz->id);
		}
        $quiz->load('questions.answers');
        return view('takepart.show',compact('quiz'));
    }

    public function store(Quiz $quiz,User $user)
    {
    	$data = request()->validate([
    		'responses.*.answer_id' => 'required',
			'responses.*.question_id' => 'required',
    	]);
		
		$takepart = Takepart::create([

			'user_id' => auth()->user()->id,
			'quiz_id' => $quiz->id
		]);

    	$takepart->responses()->createMany($data['responses']);

    	return redirect($quiz->path());
    }
}
