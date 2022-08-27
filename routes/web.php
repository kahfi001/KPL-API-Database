<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;

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

Route::get('/', fn () => view('home'));
Route::get('program', fn () => view('program'));
Route::get('about', fn () => view('about'));
Route::get('dashboard.index', fn () => view('dashboard.index'));


Route::middleware('kmkey')->group(function () {
    Route::get('/dashboard', fn () => 'Dashboard')->name('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('users', [UserController::class, 'index']);

Route::get('users/{user}', [UserController::class, 'show']);
