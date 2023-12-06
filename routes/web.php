<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Route as RoutingRoute;

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
Route::resource('answer', AnswerController::class);
Route::get('/', [AnswerController::class, 'index']);

// question route
Route::resource('question', QuestionController::class);
Route::get('/question-list', [QuestionController::class, 'index']);
Route::put('/question-list/{id}', [QuestionController::class, 'update']);

// setting route
Route::get('/setting', function () {
    return view('settings', [
        'active' => 'settings',
        'thisUser' => User::find(2)
    ]);
});

// moderator route
Route::get('/mod/report', [ReportController::class, 'index']);
Route::post('/mod/report', [ReportController::class, 'store']);

// user route
Route::get('/user/{user:username}', [UserController::class, 'show']);
Route::get('/user/edit/{user:username}', [UserController::class, 'edit']);
Route::put('/user/update/{user}', [UserController::class, 'update']);

// register & login route
Route::get('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store']);