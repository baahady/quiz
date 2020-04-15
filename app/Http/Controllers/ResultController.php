<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Takepart;
use App\Quiz;

class ResultController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Quiz $quiz, Takepart $takepart)
    {
    	//dd(auth()->user()->takeparts()->with('user')->with('quiz')->get());
        $results = auth()->user()->takeparts()->with('user')->with('quiz')->get();
        return view('result.show')->with('results',$results);
    }
}
