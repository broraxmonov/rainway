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
    return view('admission.index');
});
Route::get('/admission', function () {  return view('admission.admission'); });
Route::get('login', function () { return view('admission.login'); })->name('login');

Route::get('main', function () { return view('admission.main'); })->name('main');
Route::get('/yandex', function () { return view('yandex'); })->name('yandex');