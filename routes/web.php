<?php

use App\Http\Controllers\PhoneAuthController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('phone-auth', [PhoneAuthController::class, 'inde x']);
