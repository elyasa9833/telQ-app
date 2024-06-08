<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\ApiQuestionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'loginApi']);

Route::middleware('auth:sanctum')->group(function() {
    Route::get('/getAllUsers', [UserController::class, 'getUser']);
    Route::get('/getAllQuestions', [QuestionController::class, 'getQuestion']);
    Route::get('/getAllAnswers', [AnswerController::class, 'getAnswer']);
    
    Route::get('/listQuestions', [ApiQuestionController::class, 'listQuestion']);
    Route::post('/addQuestion', [ApiQuestionController::class, 'addQuestion']);
    Route::post('/editQuestion', [ApiQuestionController::class, 'editQuestion']);
    Route::post('/deleteQuestion', [ApiQuestionController::class, 'destroyQuestion']);
});