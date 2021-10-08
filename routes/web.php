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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin', function () {
    return view('layouts/admin-template');
})->middleware(['auth'])->name('admin-template');

Route::get('/user', function () {
    return view('layouts/user-template');
})->middleware(['auth'])->name('user-template');

Route::get('/user2', function () {
    return view('layouts/user2-template');
})->middleware(['auth'])->name('user2-template');

require __DIR__.'/auth.php';
