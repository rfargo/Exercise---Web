<?php

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

Route::resource('signatures', 'Api\SignatureController')->only(['index', 'store', 'show']);

Route::put('/signatures/{signature}/report', 'Api\ReportSignature@update');