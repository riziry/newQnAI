<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class ProfileController extends Controller
{
    public function index()
    {   
        $myQuestions = Question::where('uID', auth()->user()->id)->get();
        $myQuestions->sortByDesc('updated_at');
        // dd($myQuestions);

        return view('frontend.profile', compact('myQuestions'));
    }


}
