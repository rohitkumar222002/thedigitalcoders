<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaymentgatewayController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AboutusController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class,'index']);
Route::get('/contact_us', [HomeController::class,'contact_us'])->name('contact_us');

Route::get('/admin', function () {
    return view('backend-pro.admin');
})->middleware(['auth'])->name('dashboard');

    // Route::get('/admin',function(){
    //     return 'admin panel here';
    // });
// Route::get('/', function () {
//     return view('admin-pro.admin');
// })->middleware(['auth','admin'])->name('dashboard');


// Route::get('/admin',function(){
//     return 'admin panel here';
// })->middleware(['auth','admin']);

Route::resource('categories',CategoryController::class);
Route::resource('subcategories',SubcategoryController::class);
Route::resource('products',ProductController::class);
Route::resource('courses',CoursesController::class);
Route::resource('blogs',BlogController::class);
Route::resource('testimonials',TestimonialController::class);
Route::resource('contacts',ContactController::class);
Route::resource('aboutus',AboutusController::class);


Route::get('cat-delete/{id}',[CategoryController::class,'destroy'])->name('categories-destroy');
Route::get('sub-delete/{id}',[SubcategoryController::class,'destroy'])->name('subcategories-destroy');
Route::get('coueses-delete/{id}',[CoursesController::class,'destroy'])->name('courses-destroy');
Route::get('blogs-delete/{id}',[BlogController::class,'destroy'])->name('blogs-destroy');
Route::get('test-delete/{id}',[TestimonialController::class,'destroy'])->name('testimonials-destroy');
Route::get('about-delete/{id}',[AboutusController::class,'destroy'])->name('aboutus-destroy');

Route::get('/search',[SearchController::class,'index'])->name('search');
Route::get('/courses_list',[CoursesController::class,'index'])->name('courses.index');
// routes/web.php


// Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.form');
Route::get('/courses', [HomeController::class, 'courses_list'])->name('courses_list');
Route::POST('payment', [PaymentgatewayController::class,'payment'])->name('payment');

Route::get('/payment/success', [PaymentgatewayController::class, 'success'])->name('payment.success');
require __DIR__.'/auth.php';

// // paypal


// paypal payment
Route::get('/thankyou', [HomeController::class, 'thankyou'])->name('thankyou');
Route::get('/about_us', [HomeController::class, 'about_us'])->name('about_us');

Route::get('category/{slug}',[HomeController::class,'category'])->name('categories');
Route::get('/{slug}',[HomeController::class,'create'])->name('cours');






