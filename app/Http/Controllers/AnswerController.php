<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class AnswerController extends Controller
{
   public function store(Request $request, Question $question, $answer) {
       //$question->answers()->
}
}