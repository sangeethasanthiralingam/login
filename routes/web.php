<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VegetableController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/seller/portal', function () {
    return view('seller.portal');
})->middleware(['auth', 'verified'])->name('seller.portal');

Route::get('/customer/portal', function () {
    return view('customer.portal');
})->middleware(['auth' ,'verified'])->name('customer.portal');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('buyers', function () {
    return view('nav.buyers');
});

Route::get('sellers', function () {
    return view('nav.sellers');
});

Route::get('about-us', function () {
    return view('nav.about');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{product}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/products/search', [ProductController::class,'search'])->name('products.search');
Route::get('/products/filter', [ProductController::class,'filter'])->name('products.filter');

// Route::get('/seller-portal', [SellerController::class, 'index'])->name('seller.portal');
// Route::get('/customer-portal', [CustomerController::class, 'index'])->name('customer.portal');

Route::resource('vegetables', VegetableController::class);
// routes/web.php

Route::get('/contact', function () {
    return view('nav\contact');
})->name('contact');

Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::get('/feedback', function () {
    return view('nav\feedback');
})->name('feedback');

Route::post('/feedback/submit', [FeedbackController::class, 'submit'])->name('feedback.submit');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->name('cart.add');
Route::post('/cart/checkout', [CartController::class, 'checkout'])->name('cart.checkout');

require __DIR__ . '/auth.php';
