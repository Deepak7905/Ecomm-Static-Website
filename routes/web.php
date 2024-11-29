<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');






Route::get('/about', function () {
    return view('front.pages.about');
});



// Route::get('/product', function () {
//     return view('front.pages.product');
// });




Route::get('/contact_us', function () {
    return view('front.pages.contact_us');
});



// privacy policy view
Route::get('/privacy_policy', function () {
    return view('front.pages.privacy-policy');
});


// refund page
Route::get('/refund', function () {
    return view('front.pages.refund');
});


// terms & conditions page
Route::get('/terms_con', function () {
    return view('front.pages.terms_con');
});


// shipping policy page
Route::get('/shipping_policy', function () {
    return view('front.pages.shipping_policy');
});






// index
Route::get('/', [IndexController::class, 'index'])->name('index');


Route::post('/contact-us', [ContactController::class, 'sendEmail'])->name('contact.send');


Route::get('/product', [ProductController::class, 'product'])->name('product');




// auth middleware
Route::middleware(['auth'])->group(function () {

    Route::get('/profile', [ProfileController::class, 'showProfile'])->name('showProfile');
    Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('updateProfile');

    Route::post('/process-payment', [IndexController::class, 'processPayment'])->name('process.payment');

    
    Route::post('/create-razorpay-order', [IndexController::class, 'createRazorpayOrder']);
    Route::post('/store-payment-details', [IndexController::class, 'storePaymentDetails']);







});  //auth bracket



