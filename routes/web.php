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

Route::get('/', [AnswerController::class, 'index']);

Route::get('/question-list', [QuestionController::class, 'index']);

Route::get('/setting', function () {
    return view('settings');
});

Route::resource('question', QuestionController::class);

Route::get('/mod/report', [ReportController::class, 'index']);