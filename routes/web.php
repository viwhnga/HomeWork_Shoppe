<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TaobangController;
use App\Http\Controllers\CreateTableController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('index', [PageController::class, 'getIndex'])->name('trang-chu');
Route::get('blog', [PageController::class, 'getBlog'])->name('blog');
Route::get('product-detail', [PageController::class, 'getproductDetail'])->name('product-detail');
Route::get('contact', [PageController::class, 'getContact'])->name('contact');
Route::get('shop', [PageController::class, 'getShop'])->name('shop');
Route::get('cart', [PageController::class, 'getCart'])->name('cart');
Route::get('checkout', [PageController::class, 'getCheckout'])->name('checkout');

Route::get('hello', [TaobangController::class, 'getTaoBang'])->name('tao-bang');

Route::get('create-table', [CreateTableController::class,'createTables']);