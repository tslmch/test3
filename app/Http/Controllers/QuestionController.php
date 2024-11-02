<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function index(){
        $question=Question::orderBy('created_at', 'desc')->get();
        return view('welcome', compact('question'));
    }

    public function create(Request $request) {
        Question::create([
            'title' => $request->title,
            'text' => $request->content,
        ]);
        return redirect()->route('welcome');
    }
    public function show(){
        $question=Question::all();
        return view('show', compact('question'));
    }
}
