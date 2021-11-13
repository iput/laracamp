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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('login',function()
{
    return view('front.login');
})->name('login');

Route::get('checkout',function()
{
    return view('front.checkout');
})->name('checkout');

Route::get('success',function ()
{
    return view('front.success');
})->name('success');
