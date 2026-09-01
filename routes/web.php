<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| HALAMAN AWAL
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return redirect('/login');
});

/*
|--------------------------------------------------------------------------
| LOGIN
|--------------------------------------------------------------------------
*/
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.post');

/*
|--------------------------------------------------------------------------
| DASHBOARD / HOME
|--------------------------------------------------------------------------
*/
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

/*
|--------------------------------------------------------------------------
| ABOUT
|--------------------------------------------------------------------------
*/
Route::get('/about', function () {
    return view('about');
})->middleware('auth')->name('about');

/*
|--------------------------------------------------------------------------
| SKILLS
|--------------------------------------------------------------------------
*/
Route::get('/skills', function () {
    return view('skills');
})->middleware('auth')->name('skills');

/*
|--------------------------------------------------------------------------
| EXPERIENCE
|--------------------------------------------------------------------------
*/
Route::get('/experience', function () {
    return view('experience');
})->middleware('auth')->name('experience');

/*
|--------------------------------------------------------------------------
| PROJECTS
|--------------------------------------------------------------------------
*/
Route::get('/projects', function () {
    return view('projects');
})->middleware('auth')->name('projects');

/*
|--------------------------------------------------------------------------
| CONTACT
|--------------------------------------------------------------------------
*/
Route::get('/contact', function () {
    return view('contact');
})->middleware('auth')->name('contact');

/*
|--------------------------------------------------------------------------
| DETAIL PROJECT
|--------------------------------------------------------------------------
*/
Route::get('/project/portfolio', function () {
    return view('portfolio');
})->middleware('auth')->name('project.portfolio');

Route::get('/project/student', function () {
    return view('student');
})->middleware('auth')->name('project.student');

Route::get('/project/game', function () {
    return view('game');
})->middleware('auth')->name('project.game');

Route::get('/project/portfolio', function () {
    return view('projects.portfolio');
})->middleware('auth')->name('project.portfolio');

Route::get('/project/student', function () {
    return view('projects.student');
})->middleware('auth')->name('project.student');

Route::get('/project/game', function () {
    return view('projects.game');
})->middleware('auth')->name('project.game');

/*
|--------------------------------------------------------------------------
| LOGOUT
|--------------------------------------------------------------------------
*/
Route::post('/logout', function () {
    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');
})->name('logout');