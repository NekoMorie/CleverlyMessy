<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('login', [Controllers\Api\ApiController::class, 'login']);
Route::post('register', [Controllers\Api\ApiController::class, 'register']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// USER
Route::get('userr', [Controllers\UserCotroller::class, 'indexApi'])->middleware('auth:sanctum');
Route::get('users/{id}', [Controllers\Api\ApiUserController::class, 'getSelected'])->middleware('auth:sanctum');
Route::put('users/update/{id}', [Controllers\Api\ApiUserController::class, 'update'])->middleware('auth:sanctum');
Route::post('users/updateImg/{id}', [Controllers\Api\ApiUserController::class, 'updateImg'])->middleware('auth:sanctum');
Route::get('users/getTime/{id}', [Controllers\Api\ApiUserController::class, 'getTime'])->middleware('auth:sanctum');
Route::get('users/getLocation/{id}', [Controllers\Api\ApiUserController::class, 'getLocation'])->middleware('auth:sanctum');

// ABSEN
Route::get('absen/{id}', [Controllers\Api\ApiController::class, 'absen'])->middleware('auth:sanctum');
Route::post('absen/store', [Controllers\Api\AbsenApiController::class, 'store']);
Route::delete('delete/absen/{id}', [Controllers\Api\AbsenApiController::class, 'delete']);
Route::put('update/absen/{id}', [Controllers\Api\AbsenApiController::class, 'update']);
Route::get('get/absen/{id}', [Controllers\Api\AbsenApiController::class, 'get']);
Route::get('absen/statistik/{id}', [Controllers\Api\AbsenApiController::class, 'statistik'])->middleware('auth:sanctum');
