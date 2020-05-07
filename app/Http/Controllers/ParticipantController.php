<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ParticipantController extends Controller
{
    public function __cunstruct()
    {
        $this->middleware('auth');
    }

    public function index($id)
    {
        $participants = auth()->user()->quizzes()->with('takeparts.user')->where('id',$id)->get();
        // dd($participants);
        return view('participant.show')->with('participants',$participants);
    }

    public function result(User $user,$userId,$quizId,$takepartId)
    {
        $results = $user->find($userId)->takeparts()
        ->with('quiz.questions.answers.responses.answer')
        ->with('quiz.questions.answers.correct.answer')
        ->where('quiz_id',$quizId)
        ->where('id',$takepartId)
        ->get();;
        return view('participant.single')->with('results',$results);
    }
}
