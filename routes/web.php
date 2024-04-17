<?php

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/register', 'App\Http\Controllers\RegistrationController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\RegistrationController@register')->name('register.submit');
