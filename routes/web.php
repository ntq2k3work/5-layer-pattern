<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::get('/tasks',[UserController::class,'index'])->name('tasks.index');
Route::get('/tasks/hello',[TaskController::class,'hello'])->name('tasks.hello');
Route::get('/show',[UserController::class,'show'])->name('users.show');
