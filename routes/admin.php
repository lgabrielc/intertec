<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Dashboard\Dashboard;
use App\Http\Livewire\Admin\Profile\Profile;
use App\Http\Livewire\Admin\Users\Users;

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


Route::get('/perfil', Profile::class)->middleware('can:admin.profile')->name('admin.profile');

Route::get('/dashboard', Dashboard::class)->middleware('can:admin.dashboard')->name('admin.dashboard');

Route::get('/usuarios', Users::class)->middleware('can:admin.users')->name('admin.users');

Route::get('/recursos', Dashboard::class)->middleware('can:admin.resources')->name('admin.resources');
