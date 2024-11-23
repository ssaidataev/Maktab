<?php
use App\Http\Controllers\Admin\FeedbackController;

    Route::get('admin/sample', function(){
    return view('admin.sample');
}
);

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//
//
//});
Route::resource('admin/feedbacks', FeedbackController::class);
