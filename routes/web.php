<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Store\DashboardController;
use App\Http\Controllers\Store\PurchaseController;
use App\Http\Controllers\Store\StockController;
use App\Http\Controllers\Store\SaleController;
use App\Http\Controllers\Store\StoreController;
use App\Http\Controllers\Store\ExpenseController;
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

#region Website/ Home Routes
Route::get('/', function () {
        return view('home');
});
Route::get('/', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/index', [HomeController::class, 'index']);

Route::get('/services', [HomeController::class, 'services']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/contact', [HomeController::class, 'contact']);
#endregion

#region Auth Routes
//Route::get('login', 'AuthController@login')->name('login');
Auth::routes();
//Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
//Route::post('login', [LoginController::class,'login']);
//Route::post('logout',  [LoginController::class,'logout'])->name('logout');
//
//// Registration Routes...
//Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
//Route::post('register', [RegisterController::class, 'register']);
//
//// Password Reset Routes...
//Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
//Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
//Route::get('password/reset/{token}', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
//Route::post('password/reset', [ForgotPasswordController::class, 'reset'])->name('password.update');
//
//// Confirm Password
//Route::get('password/confirm', [ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
//Route::post('password/confirm', [ConfirmPasswordController::class, 'confirm']);
//
//// Email Verification Routes...
//Route::get('email/verify', [VerificationController::class, 'show'])->name('verification.notice');
//Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
//Route::get('email/resend',  [VerificationController::class, 'resend'])->name('verification.resend');

#endregion

#region Store

//dashboard
Route::get('/store', [DashboardController::class, 'dashboard'])->name('store_dashboard');
Route::get('/store/dashboard', [DashboardController::class, 'dashboard'])->name('store_dashboard');

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/home1', [HomeController::class, 'home1'])->name('home1');
// Route::get('/home2', [HomeController::class, 'home2'])->name('home2');
// Route::get('/home3', [HomeController::class, 'home3'])->name('home3');

//Purchase
Route::get('/store/purchase', [PurchaseController::class, 'index'])->name('store_purchase');
Route::get('/store/add_purchase', [PurchaseController::class, 'create'])->name('store_add_purchase');
Route::post('/store/add_purchase', [PurchaseController::class, 'store'])->name('store_add_purchase');
Route::get('/store/purchase_list', [PurchaseController::class, 'purchase_list'])->name('store_purchase_list');
Route::get('/store/edit_purchase/{id}', [PurchaseController::class, 'edit']);
Route::put('/store/update_purchase/{id}', [PurchaseController::class, 'update']);
Route::get('/store/delete_purchase/{id}', [PurchaseController::class, 'destroy']);

//Stock
Route::get('/store/add_stock', [StockController::class, 'add_stock'])->name('store_add_stock');
Route::get('/store/add_stock', [StockController::class, 'create'])->name('store_add_stock');
Route::post('/store/add_stock', [StockController::class, 'store'])->name('store_add_stock');
Route::get('/store/stock_list', [StockController::class, 'stock_list'])->name('store_stock_list');
Route::get('/store/edit_stock/{id}', [StockController::class, 'edit']);
Route::put('/store/update_stock/{id}', [StockController::class, 'update']);
Route::get('/store/delete_stock/{id}', [StockController::class, 'destroy']);

//Sales
Route::get('/store/add_sale', [SaleController::class, 'add_sale'])->name('store_add_sale');
Route::get('/store/sale_list', [SaleController::class, 'sale_list'])->name('store_sale_list');

// STORE
Route::get('/store/add_store', [StoreController::class, 'add_store'])->name('store_add_store');
//Route::get('/add_store', [StoreController::class, 'create'])->name('add_store');
Route::post('/store/add_store', [StoreController::class, 'store'])->name('store_add_store');
Route::get('/store/store_list', [StoreController::class, 'store_list'])->name('store_store_list');
Route::get('/store/edit_store/{id}', [StoreController::class, 'edit']);
Route::put('/store/update_store/{id}', [StoreController::class, 'update']);
Route::get('/store/delete_store/{id}', [StoreController::class, 'destroy']);

// Expense Tracker
Route::get('/store/add_expense', [ExpenseController::class, 'add_expense'])->name('store_add_expense');
Route::get('/store/add_expense', [ExpenseController::class, 'create'])->name('store_add_expense');
Route::post('/store/add_expense', [ExpenseController::class, 'store'])->name('store_add_expense');
Route::get('/store/expense_list', [ExpenseController::class, 'expense_list'])->name('store_expense_list');
Route::get('/store/edit_expense/{id}', [ExpenseController::class, 'edit']);
Route::put('/store/update_expense/{id}', [ExpenseController::class, 'update']);
Route::get('/store/delete_expense/{id}', [ExpenseController::class, 'destroy']);

#endregion
