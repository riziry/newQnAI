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

    public function edit($id){
        $question=Question::find($id);
        return view('frontend.editQuestion', compact('question'));
    }

    public function update(Request $request, $id){
        $question=Question::find($id);
        $question->update($request->all());
        return redirect('/profile');
    }

    public function destroy($id){
        $question=Question::find($id);
        $question->delete();
        return redirect('/profile');
    }
}
