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
}
