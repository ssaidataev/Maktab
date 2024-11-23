<?php
use App\Http\Controllers\Admin\MarkTypeController;

Route::resource('galleries', GalleryController::class);
    Route::get('admin/sample', function(){
    return view('admin.sample');
}
);


Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('mark-types', MarkTypeController::class);
});


//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//
//
//});
