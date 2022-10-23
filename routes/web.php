<?php

use App\Models\Donation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;


use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\AppointmentController;



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
//Landing Page
Route::get('/' , [DepartmentsController::class, 'index'])->name('HomePage');



//testimonial routes
Route::get('/userprofile/testimonial/{id}' , [UserController::class, 'testimonial'])->name('testimonial');
Route::post('/userprofile/testimonial/post/{id}' , [UserController::class, 'testimonialpost'])->name('testimonialpost');


//user profile routes
Route::get('/userprofile/{id}' , [UserController::class, 'showuserpage']);
Route::get('/userprofile/edit/{id}' , [UserController::class, 'edituserinfo'])->name('editProfile');
Route::put('/userprofile/edit/update/{id}' , [UserController::class, 'updateuserinfo'])->name('updateProfile');



//Doctor Profile routes
Route::get('/doctorprofile/{id}' , [DoctorController::class, 'showdoctorpage']);
Route::get('/doctorprofile/edit/{id}' , [DoctorController::class, 'editdoctorinfo'])->name('editDocProfile');
Route::put('/doctorprofile/edit/update/{id}' , [DoctorController::class, 'updateDoctorProfile'])->name('updateDoctorProfile');




// abou page
Route::get('/about', function () {
    return view('about');
});


// contact page
Route::get('/Contact', function () {
    return view('Contact');
});
// landing page
//Route::get('/index', function () {
//
//});

// appointment
Route::get('/appointment/{id}', function () {
    return  view('appointment');
});
Route::get('/appointment/{id}' , [AppointmentController::class, 'appointmentPage'])->name('appointmentPage');
Route::post('/appointment/store/{id}' , [AppointmentController::class, 'appointmentStore'])->name('appointmentStore');





// login register
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
require __DIR__.'/auth.php';


// order
Route::get('/product' , [ProductController::class, 'index']);
Route::get('order/{id}', [OrderController::class, 'indexO'])->middleware(['auth', 'verified']);
Route::get('/orderSave/{names}/{inputId}/{inputCity}/{inputPhone}/{inputAddress}/{product_id}' , [OrderController::class, 'store']);


// admin dashboard
Route::get('/admin',[AdminController::class,'index'])->middleware(['auth', 'verified']);
Route::get('/admin/editUser/{id}',[AdminController::class,'editUser']);
Route::post('/admin/storeEdit/{id}',[AdminController::class,'storeEdit']);

Route::get('/admin/editDoctor/{id}',[AdminController::class,'editDoctor']);
Route::post('/admin/storeEditDoctor/{id}',[AdminController::class,'storeEditDoctor']);

Route::get('/admin/editOrder/{id}',[AdminController::class,'editOrder']);
Route::post('/admin/storeEditOrder/{id}',[AdminController::class,'storeEditOrder']);

Route::get('/admin/delete/{id}',[AdminController::class,'destroy']);
Route::get('/admin/deleteDoctor/{id}',[AdminController::class,'deleteDoctor']);
Route::get('/admin/deleteOrder/{id}',[AdminController::class,'deleteOrder']);

Route::get('/admin/allDoctor',[AdminController::class,'allDoctor']);
Route::get('/admin/allUsers',[AdminController::class,'allUsers']);


Route::get('/admin/allProduct',[AdminController::class,'allProduct']);
Route::post('/admin/addProduct',[AdminController::class,'addProduct']);
Route::get('/admin/allOrder',[AdminController::class,'allOrder']);
Route::get('/admin/editProduct/{id}',[AdminController::class,'editProduct']);
Route::post('/admin/storeEditProduct/{id}',[AdminController::class,'storeEditProduct']);
Route::get('/admin/deleteProduct/{id}',[AdminController::class,'deleteProduct']);


Route::get('/admin/allAppointment',[AdminController::class,'allAppointment']);
Route::get('/admin/deleteAppointment/{id}',[AdminController::class,'deleteAppointment']);
Route::get('/admin/editAppointment/{id}',[AdminController::class,'editAppointment']);


// contact page
Route::get('/test', function () {
    return view('test');
});


//Donation
Route::post('donationForm' , [DonationController::class, 'store']);
Route::get('/donation', [DonationController::class, 'index']);