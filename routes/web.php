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
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/listapplication', function () {
    return view('listapplication');
});

Route::get('/listoccupants', function () {
    return view('listoccupants');
});

Route::get('/updatedorm', function () {
    return view('updatedorm');
});

Route::get('/viewdorm', function () {
    return view('viewdorm');
});


Route::get('/detailsapplicants', function () {
    return view('detailsapplicants');
});

Route::get('/detailsoccupants', function () {
    return view('detailsoccupants');
});

Route::get('/registration', function () {
    return view('registration');
});

Route::get('/waitingapproval', function () {
    return view('waitingapproval');
});

Route::get('/contact', function () {
    return view('contact');
});