<?php


use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/',
    action : [HomeController::class,'index']
);

Route::get('/shop',
    action : [ShopController::class,'index']);




Route::get('/cart',
    action : [CartController::class,'index']);

Route::get('/add-to-cart',
    action : [CartController::class,'update_cart']);
