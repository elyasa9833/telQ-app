<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\QuestionController;

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

// answer route
Route::get('/', [AnswerController::class, 'index']);

// question route
// Route::resource('question', QuestionController::class);
Route::get('/question-list', [QuestionController::class, 'index']);
Route::put('/question-list/{id}', [QuestionController::class, 'update']);

// setting route
Route::get('/setting', function () {
    return view('settings', [
        'active' => 'settings'
    ]);
});

// moderator route
Route::get('/mod/report', [ReportController::class, 'index']);