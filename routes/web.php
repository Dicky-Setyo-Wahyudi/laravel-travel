<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')
    ->name('home');
    
Route::get('/detail', 'DetailController@index')
    ->name('detail');

Route::get('/checkout', 'CheckoutController@index')
    ->name('checkout');

Route::get('/checkout/success', 'CheckoutController@success')
    ->name('checkout-success');

// Namespcae admin dipanggil dari Dashboard Controller pada baris 3
// Untuk Get / untuk urlnya lalu untuk dashboardController itu nama  controller lalu @index nm functionnya
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth','admin']) // Diambil dari folder http->Kernel.php
    ->group(function(){
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');
    });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
