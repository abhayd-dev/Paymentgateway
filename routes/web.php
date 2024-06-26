<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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



//Using Js
Route::get('/', [UserController::class, 'home']);

Route::post('/store', [UserController::class, 'store']);
Route::get('/payment', [UserController::class, 'payment'])->name('payment');


//Using Backend
Route::get('/index', [MainController::class, 'index'])->name('index');
Route::post('/payment2', [MainController::class, 'payment'])->name('payment2');

Route::get('/payme', [MainController::class, 'payme'])->name('payme');

Route::post('/pay', [MainController::class, 'pay'])->name('pay');
