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

Route::get('/admin/gantipassword', function () {
    return view('admin.gantipassword');
})->name('gantipassword');

//? operator

//* halaman dashboard operator
Route::get('/operator/dashboard', function () {
    return view('operator.dashboard');
});

Route::get('/operator/gantipassword', function () {
    return view('operator.gantipassword');
})->name('gantipassword');

Route::get('/login', function () {
    return view('login.login');
});

Route::get('/register', function () {

    return view('login.register');

});