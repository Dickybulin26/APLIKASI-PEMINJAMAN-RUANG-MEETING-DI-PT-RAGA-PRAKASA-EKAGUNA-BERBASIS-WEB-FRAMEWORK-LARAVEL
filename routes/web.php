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
    return view('welcome');
});

//?admin

//* halaman dashboard admin
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

//* halaman room admin
Route::get('/admin/room', function () {
    return view('admin.room');
})->name('admin.room');

//* halaman user admin
Route::get('/admin/user', function () {
    return view('admin.user');
})->name('admin.user');

//* halaman booking admin
Route::get('/admin/booking', function () {
    return view('admin.booking');
})->name('admin.booking');

//? operator

//* halaman dashboard operator
Route::get('/operator/dashboard', function () {
    return view('operator.dashboard');
});

//* halaman room operator
Route::get('/operator/room', function () {
    return view('operator.room');
})->name('operator.room');

//* halaman user operator
Route::get('/operator/user', function () {
    return view('operator.user');
})->name('operator.user');

//* halaman booking operator
Route::get('/operator/booking', function () {
    return view('operator.booking');
})->name('operator.booking');

//? user 

//* halaman dashboard user
Route::get('/user/dashboard', function () {
    return view('user.dashboard');
});

//* halaman room user
Route::get('/user/room', function () {
    return view('user.room');
})->name('user.room');

//* halaman user user
Route::get('/user/user', function () {
    return view('user.user');
})->name('user.user');

//* halaman booking user
Route::get('/user/booking', function () {
    return view('user.booking');
})->name('user.booking');
