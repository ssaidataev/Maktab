<?php
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\CompetitionController;
use Illuminate\Support\Facades\Route;

Route::resource('galleries', GalleryController::class);
    Route::get('admin/sample', function(){
    return view('admin.sample');
});
Route::resource('admin/competitions', CompetitionController::class);


//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//
//
//});
