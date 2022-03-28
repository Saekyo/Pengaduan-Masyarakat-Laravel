<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
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
    return view('index');
})->name('index');

Route::get('/login', [AuthController::class, 'check'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('auth');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'role:PETUGAS,ADMIN']], function () {
    Route::get('/dashboard', [ComplaintController::class, 'index'])->name('complaint.index');
    Route::prefix('complaint')->name('complaint.')->group(function () {
        Route::get('/{id}/delete', [ComplaintController::class, 'delete'])->name('delete');
        Route::get('/{id}/print', [ComplaintController::class, 'print'])->name('print');
        Route::get('/{id}/edit', [ComplaintController::class, 'detail'])->name('edit');
        Route::patch('/{id}/update', [ComplaintController::class, 'update'])->name('update');
    });
});

Route::group(['middleware' => ['auth', 'role:ADMIN']], function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('users', [UserController::class, 'index'])->name('user.index');
        //Route::get('/dashboard', [UserController::class, 'index'])->name('user.index');
        Route::prefix('user')->name('user.')->group(function () {
            Route::get('/create-user', [UserController::class, 'createForm'])->name('createForm');
            Route::post('/create', [UserController::class, 'create'])->name('create');
            Route::get('/{id}/delete', [UserController::class, 'delete'])->name('delete');
        });
    });
});

Route::prefix('complaint')->name('complaint.')->group(function () {
    Route::post('/create', [ComplaintController::class, 'create'])->name('create');

});
