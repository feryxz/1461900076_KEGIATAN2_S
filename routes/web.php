<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsenController;

Route::get('/', function () {
    return redirect('absen');
});

Route::resource('absen', AbsenController::class);

Route::get('/article', function () {
    return view('article');
});

Route::get('/contact', function () {
    return view('contact');
});
