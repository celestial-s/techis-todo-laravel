<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, "index"]);

Route::get('/tasks', [App\Http\Controllers\TaskController::class, 'index'])->name('tasks');
Route::post('/task', [App\Http\Controllers\TaskController::class, 'store'])->name('task');
Route::get('/task/{task}', [App\Http\Controllers\TaskController::class, 'destroy'])->name('/task/{task}');
