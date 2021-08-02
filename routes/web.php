<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AboutController,
    HomeController,
    ProfileController,
    TaskController
};

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

// Route::get('/', fn () => view('home')); // only php 7.4 and above


Route::get('/', [HomeController::class, 'index']);
Route::get('/blog', [HomeController::class, 'blog']);


Route::get('/profile/{indentify}', ProfileController::class);


Route::get('tasks', [TaskController::class, 'index']);
Route::post('tasks', [TaskController::class, 'store']);
Route::get('tasks/{id}/edit', [TaskController::class, 'edit']);
Route::patch('tasks/{id}', [TaskController::class, 'update']);
Route::delete('tasks/{id}', [TaskController::class, 'destroy']);


Route::get('/about', [AboutController::class, 'create']);
Route::post('/about', [AboutController::class, 'store']);

