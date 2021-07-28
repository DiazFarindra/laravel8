<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AboutController,
    HomeController,
    ProfileController
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
Route::get('/profile/{indentify}', ProfileController::class);
Route::get('/about', [AboutController::class, 'create']);
Route::post('/about', [AboutController::class, 'store']);

