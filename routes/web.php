<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::resource('admin',ProductController::class);
Route::get('/clothing',[HomeController::class ,'home']);

Route::get('/product/add-to-cart/{id}', [HomeController::class, 'addProduct'])->name('product.to.cart');

Route::get('/shopping/cart', [HomeController::class, 'cart'])->name('shopping.cart');
Route::get('/delete/cart/product',[HomeController::class,'deleteProduct'])->name('delete.cart.product');

Route::get('/cart',[HomeController::class , 'cart']);
