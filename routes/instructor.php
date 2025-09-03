<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return "Instructor Panel";
})->name('dashboard');
