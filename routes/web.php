<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RuangkosController;
use App\Http\Controllers\DashboardController;


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

/*
Route::get('/admin', function () {
    return view('layouts/admin-template');
})->middleware(['auth'])->name('admin-template');
*/

Route::get('/user', function () {
    return view('layouts/user-template');
})->middleware(['auth'])->name('user-template');

Route::get('/user2', function () {
    return view('layouts/user2-template');
})->middleware(['auth'])->name('user2-template');

Route::get('/admin',[DashboardController::class,'index']);

Route::get('/data_admin',[AdminController::class,'index']);

Route::get('/insert_data_admin',[AdminController::class,'insert_data_admin']);

Route::post('/update_data_admin',[AdminController::class,'update_data_admin']);

Route::post('/delete_data_admin',[AdminController::class,'delete_data_admin']);

Route::post('/data_admin/simpan',[AdminController::class,'simpan_data_admin']);

Route::post('/data_admin/edit',[AdminController::class,'edit_data_admin']);



Route::get('/data_user',[UserController::class,'index']);

Route::get('/insert_data_user',[UserController::class,'insert_data_user']);

Route::post('/update_data_user',[UserController::class,'update_data_user']);

Route::post('/delete_data_user',[UserController::class,'delete_data_user']);

Route::post('/data_user/simpan',[UserController::class,'simpan_data_user']);

Route::post('/data_user/edit',[UserController::class,'edit_data_user']);



Route::get('/data_ruang_kos',[RuangkosController::class,'index']);

Route::get('/insert_data_ruang_kos',[RuangkosController::class,'insert_data_ruang_kos']);

Route::post('/update_data_ruang_kos',[RuangkosController::class,'update_data_ruang_kos']);

Route::post('/delete_data_ruang_kos',[RuangkosController::class,'delete_data_ruang_kos']);

Route::post('/data_ruang_kos/simpan',[RuangkosController::class,'simpan_data_ruang_kos']);

Route::post('/data_ruang_kos/edit',[RuangkosController::class,'edit_data_ruang_kos']);


require __DIR__.'/auth.php';
