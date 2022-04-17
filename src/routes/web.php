<?php

use Illuminate\Support\Facades\Route;

Route::get('/contact',[\Kevinkone\Contact\Http\Controllers\ContactController::class,'index'])->name('contact.form');

Route::post('/contact', [\Kevinkone\Contact\Http\Controllers\ContactController::class,'send'])->name('contact.send');