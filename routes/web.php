<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', fn () => view('home'));

Route::get('program', function () {
    return view('program');
});
Route::get('about', function () {
    return view('about');
});

Route::get('users', function () {
    $users = [
        [
            'name'      => 'John Doe',
            'email'     => 'john@mail.com',
            'twitter'   => 'johndoe'
        ],
        [
            'name'      => 'Tailor Otwell',
            'email'     => 'tailor@mail.com',
            'twitter'   => 'tailorott'
        ],
        [
            'name'      => 'Steve Schoger',
            'email'     => 'steve@mail.com',
            'twitter'   => 'steveschoger',
        ],
    ];

    return view('users.index', [
        'users' => $users,
    ]);
});

Route::middleware('kmkey')->group(function () {
    Route::get('/dashboard', fn () => 'Dashboard')->name('dashboard');
});
