<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});


Route::get('/profile' , [UserController::class, 'showuserpage']);
Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';



Route::get('/product' , [ProductController::class, 'index']);

Route::get('order/{id}', [OrderController::class, 'index']);

Route::get('/orderSave/{names}/{inputId}/{inputCity}/{inputPhone}/{inputAddress}/{product_id}' , [OrderController::class, 'store']);
