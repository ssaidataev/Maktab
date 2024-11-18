<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GalleryCategoryController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('galleries', GalleryController::class);
Route::resource('gallery_categories', GalleryCategoryController::class);
