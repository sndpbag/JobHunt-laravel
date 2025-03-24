<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('./Page/home');
});

Route::view("/dashboard", 'dashboard.page.dashboard');