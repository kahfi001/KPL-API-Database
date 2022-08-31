<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\ProgramController;

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
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::get('program', [ProgramController::class, 'index']);

Route::get('users', [UserController::class, 'index']);

Route::get('users/{user}', [UserController::class, 'show']);

// Route::get('/dashboard/product', [DashboardProductController::class, 'index']);

// Route::get('dashboard/product/create', [DashboardProductController::class, 'create'])->middleware('auth');
// Route::post('dashboard/product/create/{id}', [DashboardProductController::class, 'store'])->middleware('auth');
// Route::get('/dashboard/product/edit/{id}', [DashboardProductController::class, 'edit'])->middleware('auth');
// Route::get('/dashboard/product/update', [DashboardProductController::class, 'update'])->middleware('auth');
// Route::post('dashboard/product/{id}', [DashboardProductController::class, 'destroy'])->middleware('auth');

Route::resource('/dashboard/product', DashboardProductController::class);
