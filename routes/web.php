<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\{
    AboutController,
    HomeController,
    LoginController,
    LogoutController,
    ProfileController,
    RegistrationController,
    TaskController,
    UserController
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


Route::get('/about', [AboutController::class, 'create']);
Route::post('/about', [AboutController::class, 'store']);


Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{user:username}', [UserController::class, 'show'])->name('users.show');


Route::middleware(['auth'])->group(function () {

    Route::resource('tasks', TaskController::class);

    Route::post('logout', LogoutController::class)->name('logout');

});


Route::middleware(['guest'])->group(function () {

    Route::get('register', [RegistrationController::class, 'create'])->name('register');
    Route::post('register', [RegistrationController::class, 'store'])->name('register');


    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store'])->name('login');

});
