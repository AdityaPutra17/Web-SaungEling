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
});
Route::get('/destinasi', function () {
    return view('users.destinasi.destinasi');
});
Route::get('/detailDestinasi', function () {
    return view('users.destinasi.detailDestinasi');
});
Route::get('/travel', function () {
    return view('users.travel.travel');
});
Route::get('/detailtravel', function () {
    return view('users.travel.detailtravel');
});
Route::get('/hotel', function () {
    return view('users.hotel.hotel');
});
Route::get('/detailhotel', function () {
    return view('users.hotel.detailhotel');
});
Route::get('/kuliner', function () {
    return view('users.kuliner.kuliner');
});
Route::get('/detailkuliner', function () {
    return view('users.kuliner.detailkuliner');
});
Route::get('/admindestinasi', function () {
    return view('admin.admindestinasi');
});