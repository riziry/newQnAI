<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LeaderboardController extends Controller
{
    public function index(){

        $users = User::all();
        $rank = $users->unique('points')->values()->mapWithKeys(function ($item, $index){
            return [$index+1 => $item];
        });
        // dd($rank);

        return view('frontend.leaderboard', compact('rank'));
    }
}
