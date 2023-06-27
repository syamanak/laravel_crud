<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Web\WebProductController;
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

// 商品マスタ
Route::prefix('admin')->group(function () {
    Route::resource('/product', ProductController::class, ['except' => ['show']]);
});

Route::get('/product', [WebProductController::class, 'index']);
