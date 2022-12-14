<?php

use App\Http\Controllers\ProductDetailsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\admin\ProductManagerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;




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
)->name('home');

Route::get('/login',
    action : [LoginController::class,'getLogin']
)->name('login');

Route::get('/register',
    action : [LoginController::class,'showRegister']
);

Route::post('/register',
    action : [LoginController::class,'register']
)->name('register');

Route::post('/login',
    action : [LoginController::class,'postLogin']
)->name('postLogin');

Route::get('/logout',
    action : [LoginController::class,'getLogout'])->name('logout');


Route::get('/shop',
    action : [ShopController::class,'index'])->name('shop');

Route::get('/details',
    action : [ProductDetailsController::class,'index'])->name('details');

Route::get('/cart',
    action : [CartController::class,'index'])->name('cart');

Route::get('/add-to-cart',
    action : [CartController::class,'add_to_cart'])->name('add_to_cart');

Route::get('/update-to-cart',
    action : [CartController::class,'update_to_cart'])->name('update_to_cart');

Route::get('/remove_to_cart',
    action : [CartController::class,'remove_to_cart'])->name('remove_to_cart');

Route::get('/checkout',
    action : [CheckoutController::class,'index'])->name('checkout');

Route::post('/order',
    action : [CheckoutController::class,'addOrder'])->name('addOrder');


Route::get('/admin',
    action : [AdminController::class,'index'])->name('admin');

Route::get('/admin-customer',
    action : [AdminController::class,'customer'])->name('customer');

Route::get('/logout-admin',
    action : [LoginController::class,'getLogoutAdmin'])->name('logout-admin');

// Product manager

Route::get('/admin-product',
    action : [ProductManagerController::class,'index'])->name('admin-product');

Route::get('/admin-product-create',
    action : [ProductManagerController::class,'create'])->name('admin-product-create');

Route::post('/admin-product-store',
    action : [ProductManagerController::class,'store'])->name('admin-product-store');

Route::get('/admin-product-delete',
    action : [ProductManagerController::class,'delete'])->name('admin-product-delete');

Route::get('/admin-product-update',
    action : [ProductManagerController::class,'update'])->name('admin-product-update');

Route::get('/admin-product-edit',
    action : [ProductManagerController::class,'edit'])->name('admin-product-edit');

// Bill
Route::get('/admin-bill',
    action : [\App\Http\Controllers\admin\BillManagerController::class,'index'])->name('admin-bill');
Route::get('/admin-detail-bill',
    action : [\App\Http\Controllers\admin\BillManagerController::class,'view'])->name('admin-detail-bill');

Route::get('/admin-update-status-bill',
    action : [\App\Http\Controllers\admin\BillManagerController::class,'update_status'])->name('admin-update-status-bill');

Route::get('/admin-destroy-status-bill',
    action : [\App\Http\Controllers\admin\BillManagerController::class,'destroy'])->name('admin-destroy-status-bill');

// Inventory
Route::get('/admin-inventory',
    action : [\App\Http\Controllers\admin\Inventory::class,'index'])->name('admin-inventory');
Route::post('/admin-inventory-update',
    action : [\App\Http\Controllers\admin\Inventory::class,'update'])->name('admin-inventory-update');

Route::get('/admin-inventory-edit',
    action : [\App\Http\Controllers\admin\Inventory::class,'edit'])->name('admin-inventory-edit');

Route::get('/details',
    action : [ProductDetailsController::class,'index'])->name('details');

Route::get('/contacts',
    action : [ContactsController::class,'index'])->name('contacts');
   

// detail
Route::get('/details',
    action : [ProductDetailsController::class,'index'])->name('details');

Route::get('/contacts',
    action : [ContactsController::class,'index'])->name('contacts');
//login admin
Route::get('/log-admin',
    action : [LoginController::class,'getLogAdmin'])->name('logAdmin');

Route::post('/post-log-admin',
    action : [LoginController::class,'postLogAdmin'])->name('postlogAdmin');

Route::get('/handle-form',[MailController::class,'handleRequest']);

//order list
Route::get('/order',
    action : [OrderController::class,'index'])->name('orderList');