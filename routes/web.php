<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\contactController as ControllersContactController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('skill',function(){
    return view('skill');
})->name('skill');
Route::get('service',[serviceController::class,'service'])->name('service');
Route::get('contact',[ControllersContactController::class,'contact'])->name('contact');
