<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AkunController;



Route::get('/', [PagesController::class, 'index']);
Route::get('/wisata', [PagesController::class, 'wisata']);
Route::get('/akomodasi', [PagesController::class, 'akomodasi']);
Route::get('/gallery', [PagesController::class, 'gallery']);
Route::get('/contacts', [PagesController::class, 'contacts']);

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin', 'auth']], function () {
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('akun', [AdminController::class, 'akun'])->name('admin.akun');
    Route::get('hapus/{id}', [AkunController::class, 'deleteUser'])->name('admin.hapus');
    Route::get('create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('akun', [AkunController::class, 'store'])->name('admin.akun');
    Route::get('edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('update', [AkunController::class, 'update'])->name('admin.update');
    Route::get('tiket', [AdminController::class, 'tiket'])->name('admin.tiket');
});

Route::group(['prefix' => 'user', 'middleware' => ['isUser', 'auth']], function () {
    Route::get('dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('wisata', [UserController::class, 'wisata'])->name('user.wisata');
    Route::get('akomodasi', [UserController::class, 'akomodasi'])->name('user.akomodasi');
    Route::get('tiket', [UserController::class, 'tiket'])->name('user.tiket');
});
