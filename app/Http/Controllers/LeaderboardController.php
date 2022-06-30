<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LeaderboardController extends Controller
{
    public function index(){

        $users = User::all();
        $rank = $users->sortByDesc('points')->take(3);  
        // dd($rank);

        return view('frontend.leaderboard', compact('rank'));
    }
}
