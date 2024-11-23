<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\Admin\GalleryCategoryController;



require __DIR__.'/auth.php';
require __DIR__.'/admin.php';


Route::get('/', function () {
    return view('layouts.app');
    Route::resource('posts', PostController::class);

});use App\Http\Controllers\Admin\Competition_typesController;



Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('competition_types', Competition_typesController::class);
});






