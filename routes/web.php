<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('./Page/home');
});

Route::view("/dashboard", 'dashboard.page.dashboard');
Route::view("/dashboard/create_job", 'dashboard.page.job');
Route::view('/dashboard/category',"dashboard.page.categery_page");