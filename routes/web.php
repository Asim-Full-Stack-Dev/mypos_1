<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\User\PurchaseController;
use App\Http\Controllers\User\StockController;
use App\Http\Controllers\User\SaleController;
use App\Http\Controllers\User\StoreController;
use App\Http\Controllers\User\ExpenseController;
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
Route::get('login', 'AuthController@login')->name('login');

#endregion

Auth::routes();

#region Elo Dashboard Routes

//master
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

// Route::get('/home', [HomeController::class, 'index'])->name('home');
// Route::get('/home1', [HomeController::class, 'home1'])->name('home1');
// Route::get('/home2', [HomeController::class, 'home2'])->name('home2');
// Route::get('/home3', [HomeController::class, 'home3'])->name('home3');

//Purchase
Route::get('/purchase', [PurchaseController::class, 'index'])->name('purchase');
Route::get('/add_purchase', [PurchaseController::class, 'create'])->name('add_purchase');
Route::post('/add_purchase', [PurchaseController::class, 'store'])->name('add_purchase');
Route::get('/purchase_list', [PurchaseController::class, 'purchase_list'])->name('purchase_list');
Route::get('edit_purchase/{id}', [PurchaseController::class, 'edit']);
Route::put('update_purchase/{id}', [PurchaseController::class, 'update']);
Route::get('delete_purchase/{id}', [PurchaseController::class, 'destroy']);

//Stock
Route::get('/add_stock', [StockController::class, 'add_stock'])->name('add_stock');
Route::get('/add_stock', [StockController::class, 'create'])->name('add_stock');
Route::post('/add_stock', [StockController::class, 'store'])->name('add_stock');
Route::get('/stock_list', [StockController::class, 'stock_list'])->name('stock_list');
Route::get('edit_stock/{id}', [StockController::class, 'edit']);
Route::put('update_stock/{id}', [StockController::class, 'update']);
Route::get('delete_stock/{id}', [StockController::class, 'destroy']);

//Sales
Route::get('/add_sale', [SaleController::class, 'add_sale'])->name('add_sale');
Route::get('/sale_list', [SaleController::class, 'sale_list'])->name('sale_list');

// STORE
Route::get('/add_store', [StoreController::class, 'add_store'])->name('add_store');
//Route::get('/add_store', [StoreController::class, 'create'])->name('add_store');
Route::post('/add_store', [StoreController::class, 'store'])->name('add_store');
Route::get('/store_list', [StoreController::class, 'store_list'])->name('store_list');
Route::get('edit_store/{id}', [StoreController::class, 'edit']);
Route::put('update_store/{id}', [StoreController::class, 'update']);
Route::get('delete_store/{id}', [StoreController::class, 'destroy']);

// Expense Tracker
Route::get('/add_expense', [ExpenseController::class, 'add_expense'])->name('add_expense');
Route::get('/add_expense', [ExpenseController::class, 'create'])->name('add_expense');
Route::post('/add_expense', [ExpenseController::class, 'store'])->name('add_expense');
Route::get('/expense_list', [ExpenseController::class, 'expense_list'])->name('expense_list');
Route::get('edit_expense/{id}', [ExpenseController::class, 'edit']);
Route::put('update_expense/{id}', [ExpenseController::class, 'update']);
Route::get('delete_expense/{id}', [ExpenseController::class, 'destroy']);

#endregion
