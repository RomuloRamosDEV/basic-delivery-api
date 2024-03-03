<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TestController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', [TestController::class, 'index'])->name('test');