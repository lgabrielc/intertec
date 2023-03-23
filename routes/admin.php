<?php

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Route;


Route::get('/perfil', [AuthController::class, 'index_perfil'])->middleware('can:admin.profile')->name('admin.profile');

Route::get('/dashboard', [AuthController::class, 'index_dashboard'])->middleware('can:admin.dashboard')->name('admin.dashboard');

Route::get('/usuarios', [AuthController::class, 'index_usuarios'])->middleware('can:admin.users')->name('admin.users');

Route::get('/recursos', [AuthController::class, 'index_recursos'])->middleware('can:admin.resources')->name('admin.resources');

Route::get('/recursos/mikrotik', [AuthController::class, 'index_recursos_mikrotik'])->name('admin.recursos.mikrotik');
