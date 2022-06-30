<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function create() {
        return view('frontend.question');
    }

    public function store(Request $request){
        Question::create($request->all());
    }
}
