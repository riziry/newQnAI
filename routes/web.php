<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\LeaderboardController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [QuestionController::class, 'see']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/leaderboard', [LeaderboardController::class, 'index']);

Route::get('/notification', function () {
    return view('frontend.notification');
});

Route::get('/profile', [profileController::class, 'index']);

Route::get('/question/ask', [QuestionController::class, 'create']);
Route::post('/', [QuestionController::class, 'store']);

Route::get('/question/{id}/edit', [QuestionController::class, 'edit']);
route::put('/question/{id}', [QuestionController::class, 'update']);

Route::delete('/question/{id}', [QuestionController::class, 'destroy']);

require __DIR__.'/auth.php';
