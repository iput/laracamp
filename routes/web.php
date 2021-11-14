<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('signin',function ()
{
    return view('front.login');
})->name('signin');

Route::get('checkout',function ()
{
    return view('front.checkout');
})->name('checkout');

Route::get('success',function ()
{
    return view('front.success');
})->name('success');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('sign-in-google',[UserController::class,'google'])->name('user.login.google');
Route::get('auth/google/callback',[UserController::class,'handleProviderCallback'])->name('user.google.callback');

require __DIR__.'/auth.php';
