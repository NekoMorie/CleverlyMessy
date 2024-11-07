<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;

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


Route::get('/', [Controllers\HomeController::class, 'index']) -> name('home');
Route::get('/contact', [Controllers\HomeController::class, 'contact']) -> name('contact');
Route::get('/admin', [Controllers\AdminController::class, 'index']) -> name('admin');
Route::get('/admin/users', [Controllers\AdminController::class, 'users']) -> name('users');
Route::post('/admin/users', [Controllers\AdminController::class, 'usersAdd']) -> name('usersAdd');
Route::delete('/admin/users/{id}', [Controllers\AdminController::class, 'userDelete']) -> name('userDelete');
Route::get('/admin/profile', [Controllers\AdminController::class, 'profile']) -> name('profile');
Route::get('/admin/lokasi', [Controllers\AdminController::class, 'lokasi']) -> name('lokasi');
Route::get('/admin/waktu', [Controllers\AdminController::class, 'waktu']) -> name('waktu');
Route::get('/admin/monitoring', [Controllers\AdminController::class, 'monitoring']) -> name('monitoring');
Route::get('/admin/kategori', [Controllers\AdminController::class, 'kategori']) -> name('kategori');

Route::get('/admin/edit-profile', [Controllers\AdminController::class, 'editprofile']) -> name('editprofile');

Route::get('/login', [Controllers\LoginController::class, 'LoginForm'])->name('login')->middleware('guest');
Route::post('/login', [Controllers\LoginController::class, 'authenticate']);
Route::post('/logout', function () {
    Auth::logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout');
