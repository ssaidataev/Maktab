<?php

use App\Http\Controllers\Admin\PositionsController;
use App\Http\Controllers\Public\GalleryController;
use App\Http\Controllers\Public\MainController;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\Admin\GalleryCategoryController;



require __DIR__.'/auth.php';
require __DIR__.'/admin.php';

Route::get('/', [MainController::class, 'index'] )->name('home') ;
Route::get('/gallery', [GalleryController::class, 'index'] )->name('gallery') ;

Route::get('/welcome', function () {
    return view('welcome');
});
