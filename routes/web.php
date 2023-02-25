<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompaniesController;
use Illuminate\Http\Request;
use App\Http\Controllers\InvoiceController;

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

// Auth::routes();

Route::get('/', function () {
    return view('dashboard');
});


Route::get('/companies', [CompaniesController::class, 'getAllCompanies'] )->name('companies');

Route::get('/orders', function () { return view('orders'); })->name('orders');

Route::get('/delivery-staff', function () { return view('delivery-staff'); })->name('deliveryStaff');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//////////////



Route::post('/invoices', [InvoiceController::class, 'create']);
Route::put('/invoices/{id}', [InvoiceController::class, 'update']);
Route::delete('/invoices/{id}', [InvoiceController::class, 'delete']);
Route::get('/invoices/{id}', [InvoiceController::class, 'show']);
