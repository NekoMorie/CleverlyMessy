<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;

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

Route::get('/admin/lokasi', [AdminController::class, 'lokasi']) -> name('lokasi');

Route::get('/admin/waktu', [AdminController::class, 'waktu']) -> name('waktu');

Route::get('/admin/edit-profile', [AdminController::class, 'editprofile']) -> name('editprofile');

Route::get('/login', [LoginController::class, 'LoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');
