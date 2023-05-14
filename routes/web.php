<?php

use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('main');
});

Route::get('/addProd', function () {
    return view('admin.addProd');
});

Route::post('/add-product', ProductController::class . '@store');

Route::get('/products/by-category', [App\Http\Controllers\ProductController::class, 'getByCategory'])->name('products.byCategory');

Route::get('/products/all', [App\Http\Controllers\ProductController::class, 'getAll'])->name('products.all');

Route::get('/products/by-category-and-index', [App\Http\Controllers\ProductController::class, 'getByCategoryAndIndex'])->name('products.byCategoryAndIndex');
Route::get('/products/by-category/{category}', [App\Http\Controllers\ProductController::class, 'getByCategory'])->name('products.byCategory');
Route::get('/products/next/{category}/{id}', [App\Http\Controllers\ProductController::class, 'getNextProduct'])->name('products.next');

Route::post('/add-to-cart', [App\Http\Controllers\CartController::class, 'add']);

Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');
Route::get('/cartData', [App\Http\Controllers\CartController::class, 'data'])->name('cart.data');


Route::get('/cart/increment/{productId}', array('uses' => \App\Http\Controllers\CartController::class . '@increment'));
Route::get('/cart/decrement/{productId}', array('uses' => \App\Http\Controllers\CartController::class . '@decrement'));

Route::post('/cart/update/{productId}', array('uses' => \App\Http\Controllers\CartController::class . '@update'));

