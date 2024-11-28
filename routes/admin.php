<?php
use App\Http\Controllers\Admin\CompetitionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MarkTypeController;

Route::resource('admin/competitions', CompetitionController::class);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('mark-types', MarkTypeController::class);
});
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('competition_types', CompetitionTypeController::class);
});
//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//
//
//});
