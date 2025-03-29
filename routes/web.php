<?php

use App\Http\Controllers\JobCategorieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('./Page/home');
});

Route::view("/dashboard", 'dashboard.page.dashboard');
Route::view("/dashboard/create_job", 'dashboard.page.job');
Route::view('/dashboard/category',"dashboard.page.categery_page");


//  dashboard route
Route::post('/dashboard/category/create',[JobCategorieController::class, 'jobCategrey_create'])->name('dashboard.category.create');
Route::get("/dashboard/category/get",[JobCategorieController::class,'fetch_category'])->name('get-category');
Route::delete("/category/delete/{id}",[JobCategorieController::class,'delete_category']) -> name('category.delete');
Route::put("/dashboard/category/update/{id}",[JobCategorieController::class,'update_category']) -> name('dashboard.category.update');