<?php

use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\Admin\GalleryCategoryController;

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';


Route::get('/', function () {
    return view('layouts.app');

});use App\Http\Controllers\Admin\CompetitionTypeController;



Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('competition_types', CompetitionTypeController::class);
});






