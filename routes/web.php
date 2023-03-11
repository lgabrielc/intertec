<?php

use App\Http\Controllers\OptimizeController;
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
    return view('welcome');
});

Route::get('/contacto', function () {
    return view('contacto');
});
Route::get('/optimize', [OptimizeController::class, 'optimize']);
Route::get('/migratefresh', [OptimizeController::class, 'fresh']);
// Route::get('/migrate', 'OptimizeController@index');
// Route::get('/fresh', 'OptimizeController@index');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
