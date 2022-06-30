<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\User;

class QuestionController extends Controller
{
    public function see() {
        $questions = Question::all();
        foreach ($questions as $question) {
            $question->name = User::find($question->uID)->name;
        }

        $descending = $questions->sortByDesc('updated_at');

        // dd($descending);
        return view('dashboard', compact('descending'));
    }

    public function create() {
        return view('frontend.question');
    }

    public function store(Request $request){
        Question::create($request->all());
        $user=User::find(auth()->user()->id);
        $user->points=$user->points+2;
        $user->save();

        return redirect('/');
    }
}
