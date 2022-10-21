<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/about', function () {
    return view('about');
});


Route::get('/profile' , [UserController::class, 'showuserpage']);
Route::get('/Contact', function () {
    return view('Contact');
});

Route::get('/index', function () {
    return view('Home.index');
});
Route::get('/appointment', function () {
    return  view('appointment');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/admin',[AdminController::class,'index']);
Route::get('/admin/editUser/{id}',[AdminController::class,'editUser']);
Route::post('/admin/storeEdit/{id}',[AdminController::class,'storeEdit']);


Route::get('/admin/editDoctor/{id}',[AdminController::class,'editDoctor']);
Route::post('/admin/storeEditDoctor/{id}',[AdminController::class,'storeEditDoctor']);


Route::get('/admin/delete/{id}',[AdminController::class,'destroy']);
Route::get('/admin/deleteDoctor/{id}',[AdminController::class,'deleteDoctor']);


Route::get('/admin/allDoctor',[AdminController::class,'allDoctor']);
Route::get('/admin/allUsers',[AdminController::class,'allUsers']);
Route::get('/admin/allProduct',[AdminController::class,'allProduct']);
Route::post('/admin/addProduct',[AdminController::class,'addProduct']);

