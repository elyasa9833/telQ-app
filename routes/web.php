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

Route::middleware('auth')->group(function () {
    // answer route
    Route::resource('/answer', AnswerController::class);
    Route::get('/', [AnswerController::class, 'index']);
    Route::put('/answer/{answer}', [AnswerController::class, 'update']);

    // question route
    Route::resource('/question-list', QuestionController::class);

    // setting route
    Route::get('/setting', function () {
        return view('settings', [
            'active' => 'settings'
        ]);
    });

    // moderator route
    Route::get('/mod/report', [ReportController::class, 'index']);
    Route::post('/mod/report', [ReportController::class, 'store']);

    // user route
    Route::get('/user/{user:username}', [UserController::class, 'show']);
    Route::get('/user/{user:username}/edit', [UserController::class, 'edit']);
    Route::put('/user/{user}', [UserController::class, 'update']);
});

// register, login & logout route
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::get('/register', [AuthController::class, 'register'])->middleware('guest');
Route::post('/register', [AuthController::class, 'store']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/logout', function(){
    return redirect()->back();
});

// hero route
Route::get('/hero', function(){
    return view('hero');
});
