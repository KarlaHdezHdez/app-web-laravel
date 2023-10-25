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

Route::get('avisocockie', function () {
    return view('avisocockie');
});

Route::get('sobrenosotros', function () {
    return view('sobrenosotros');
});

Route::get('registro', function () {
    return view('registro');
});

Route::get('contactanos', function () {
    return view('contactanos');
});

Route::get('avisoprivacidad', function () {
    return view('avisoprivacidad');
});

Route::get('informacion', function () {
    return view('informacion');
});
Route::get('dashboardadmin', function () {
    return view('dashboardadmin');
});



