<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function() {
   Route::get('play', [App\Http\Controllers\UserController::class, 'play'])->name('play');
   Route::get('game', [App\Http\Controllers\UserController::class, 'game'])->name('game');
   Route::get('admin-home', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.home');
   Route::put('admin/user/{user}', [App\Http\Controllers\AdminController::class, 'update'])->name('admin.user.update');
   Route::delete('admin/user/{user}', [App\Http\Controllers\AdminController::class, 'delete'])->name('admin.user.delete');
});

Route::get('/admin-login', [App\Http\Controllers\AdminController::class, 'viewLogin'])->name('admin.login');
Route::post('/admin-login', [App\Http\Controllers\AdminController::class, 'login'])->name('admin.post.login');
