<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/create', [BlogController::class, 'create']);
    Route::post('/store', [BlogController::class, 'store']);
    Route::get('/blogs', [BlogController::class, 'index']);
    Route::get('/delete/{id}', [BlogController::class, 'destroy']);
    Route::get('/edit/{id}', [BlogController::class, 'edit']);
    Route::put('/update/{id}', [BlogController::class, 'update']);
});