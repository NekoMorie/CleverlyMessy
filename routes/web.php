<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers;
use App\Http\Controllers\GoogleAuthController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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


Route::get('/', [Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contact', [Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/blog', [Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [Controllers\HomeController::class, 'blogDetail'])->name('blog.detail');
Route::get('/harga', [Controllers\HomeController::class, 'harga'])->name('harga');
Route::get('/beli', [Controllers\HomeController::class, 'beli'])->name('beli');
Route::get('/faq', [Controllers\HomeController::class, 'faq'])->name('faq');




Route::get('/login', [Controllers\LoginController::class, 'LoginForm'])->name('login')->middleware('guest');
Route::post('/login', [Controllers\LoginController::class, 'authenticate']);
Route::post('/logout', function () {
    Auth::guard('admin')->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/login');
})->name('logout-admin');

Route::get('/about', [Controllers\HomeController::class, 'about'])->name('about');

Route::get('/auth/google', [GoogleAuthController::class, 'redirect'])->name('auth-google');
Route::get('/auth/google/call-back', [GoogleAuthController::class, 'callbackGoogle'])->name('callback-google');

// Route::get('/alert', [AuthController::class, 'notVerif'])->middleware(['auth'])->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('/profile')->with('loginBerhasil', 'Email Anda telah terverifikasi!');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::middleware(['role:customer'])->group(function () {
    Route::get('/user/dashboard', [Controllers\AdminController::class, 'index'])->name('admin');
    Route::get('/user/profile', [Controllers\AdminController::class, 'profile'])->name('profile');
    // Route::get('/admin/waktu', [Controllers\AdminController::class, 'waktu']) -> name('waktu');
    Route::get('/user/monitoring', [Controllers\AdminController::class, 'monitoring'])->name('monitoring');
    Route::get('/user/kategori', [Controllers\AdminController::class, 'kategori'])->name('kategori');

    Route::get('/user/edit-profile', [Controllers\AdminController::class, 'editprofile'])->name('editprofile');
});

// Rute untuk admin  
Route::middleware(['role:admin'])->group(function () {
    Route::get('/dashboard', [Controllers\AdminController::class, 'index'])->name('admin');
    Route::get('/admin/profile', [Controllers\AdminController::class, 'profile'])->name('profile');
    // Route::get('/admin/waktu', [Controllers\AdminController::class, 'waktu']) -> name('waktu');
    Route::get('/admin/monitoring', [Controllers\AdminController::class, 'monitoring'])->name('monitoring');
    Route::get('/admin/kategori', [Controllers\AdminController::class, 'kategori'])->name('kategori');

    Route::get('/admin/edit-profile', [Controllers\AdminController::class, 'editprofile'])->name('editprofile');

    //  Admin
    Route::get('/admin/useradmin', [Controllers\UserCotroller::class, 'UserAdmin'])->name('admin');
    Route::get('/admin/addAdmin', [Controllers\UserCotroller::class, 'addAdmin'])->name('addAdmin');
    Route::get('/admin/editAdmin/{id}', [Controllers\UserCotroller::class, 'editAdmin'])->name('editAdmin');
    Route::post('/admin/updateUser/{id}', [Controllers\UserCotroller::class, 'updateUserAdmin'])->name('updateUser');
    Route::post('/admin/useradmin', [Controllers\UserCotroller::class, 'adminStore'])->name('adminAdd');
    Route::delete('/admin/useradmin/{id}', [Controllers\UserCotroller::class, 'userDeleteAdmin'])->name('admin.delete');

    // Users Beli
    Route::get('/admin/customer', [Controllers\UserCotroller::class, 'UserCustomer'])->name('customer');
    Route::get('/admin/customerView/{id}', [Controllers\UserCotroller::class, 'CustomerDashboard'])->name('customer.view');


    //  USERS
    Route::get('/admin/users', [Controllers\UserCotroller::class, 'index'])->name('users');
    Route::get('/admin/editUser/{id}', [Controllers\UserCotroller::class, 'editUser'])->name('editUser');
    Route::put('/admin/updateUser/{id}', [Controllers\UserCotroller::class, 'updateUser'])->name('updateUser');
    Route::post('/admin/users', [Controllers\UserCotroller::class, 'usersAdd'])->name('usersAdd');
    Route::delete('/admin/users/{id}', [Controllers\UserCotroller::class, 'userDelete'])->name('userDelete');


    // Paket
    Route::get('/admin/paket', [Controllers\PaketController::class, 'index'])->name('paket');
    Route::post('/admin/paket/create', [Controllers\PaketController::class, 'create'])->name('paket.create');
    Route::post('/admin/paket/update', [Controllers\PaketController::class, 'update'])->name('paket.update');
    Route::post('/admin/paket/delete', [Controllers\PaketController::class, 'delete'])->name('paket.delete');

    // InfoPaket
    Route::get('/admin/paket-info', [Controllers\PaketController::class, 'infoPaket'])->name('paket-info');
    Route::post('/admin/paket-info/create', [Controllers\PaketController::class, 'infoCreate'])->name('paket-info.create');
    Route::post('/admin/paket-info/update', [Controllers\PaketController::class, 'infoUpdate'])->name('paket-info.update');
    Route::post('/admin/paket-info/delete', [Controllers\PaketController::class, 'infoDelete'])->name('paket-info.delete');

    // Blog Kategori
    Route::get('/admin/kategori-tag-blog', [Controllers\BlogController::class, 'kategoriTag'])->name('kategori-tag-blog');
    Route::post('/admin/kategori/store', [Controllers\BlogController::class, 'kategoriStore'])->name('kategori.create');
    Route::post('/admin/kategori/update/{id}', [Controllers\BlogController::class, 'kategoriUpdate'])->name('kategori.update');
    Route::post('/admin/kategori/delete/{id}', [Controllers\BlogController::class, 'kategoriDelete'])->name('kategori.delete');

    Route::post('/admin/tag/store', [Controllers\BlogController::class, 'tagStore'])->name('tag.create');
    Route::post('/admin/tag/update/{id}', [Controllers\BlogController::class, 'tagUpdate'])->name('tag.update');
    Route::post('/admin/tag/delete/{id}', [Controllers\BlogController::class, 'tagDelete'])->name('tag.delete');

    // Blog
    Route::get('/admin/blog', [Controllers\BlogController::class, 'index'])->name('blog');
    Route::get('/admin/blog/create', [Controllers\BlogController::class, 'create'])->name('blog.create');
    Route::post('/admin/blog/store', [Controllers\BlogController::class, 'store'])->name('blog.store');
    Route::get('/admin/blog/edit/{id}', [Controllers\BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/admin/blog/update/{id}', [Controllers\BlogController::class, 'update'])->name('blog.update');
    Route::post('/admin/blog/delete/{id}', [Controllers\BlogController::class, 'destroy'])->name('blog.delete');
});







// LOKASI
Route::get('/admin/lokasi', [Controllers\LokasiController::class, 'index'])->name('lokasi');
Route::post('/admin/lokasi', [Controllers\LokasiController::class, 'store'])->name('store');
Route::delete('/admin/lokasi/{id}', [Controllers\LokasiController::class, 'hapus'])->name('hapus');

// WAKTU
Route::get('/admin/waktu', [Controllers\WaktuController::class, 'index'])->name('waktu');
Route::post('/admin/waktu', [Controllers\WaktuController::class, 'store'])->name('addWaktu');
Route::delete('/admin/waktu/{id}', [Controllers\WaktuController::class, 'hapus'])->name('hapusWaktu');

// ABSEN
Route::get('/absen', [Controllers\AbsenController::class, 'index'])->name('absen');
Route::post('/absen', [Controllers\AbsenController::class, 'store'])->name('absen.store');
