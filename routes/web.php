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

Route::get('/dashboard', function () {
    return view('admin/dashboard');
}); 

Route::get('/table', function () {
    return view('admin/table');
}); 

Route::get('/billing', function () {
    return view('admin/billing');
}); 

Route::get('/profile', function () {
    return view('admin/profile');
}); 

