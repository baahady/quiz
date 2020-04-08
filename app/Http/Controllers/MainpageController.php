<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Quiz;

class MainpageController extends Controller
{
    public function index(User $user, Quiz $quiz)
    {
        $quizzes = $quiz->with('user')->get();
    	return view('welcome')->with('quizzes',$quizzes);
    }
}
      