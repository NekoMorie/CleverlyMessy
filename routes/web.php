<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;


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


Route::get('/', [HomeController::class, 'index']) -> name('home');

Route::get('/contact', [HomeController::class, 'contact']) -> name('contact');

Route::get('/admin', [AdminController::class, 'index']) -> name('admin');

Route::get('/admin/users', [AdminController::class, 'users']) -> name('users');

Route::get('/admin/profile', [AdminController::class, 'profile']) -> name('profile');
