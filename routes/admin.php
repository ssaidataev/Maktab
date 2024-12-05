<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\CompetitionController;
use App\Http\Controllers\Admin\MarkTypeController;
use App\Http\Controllers\Admin\TimesController;
use App\Http\Controllers\Admin\EducationDateController;
use App\Http\Controllers\Admin\EducationPlanController;
use App\Http\Controllers\Admin\EducationLevelController;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('mark-types', MarkTypeController::class);
    Route::resource('competitions', CompetitionController::class);
    Route::resource('feedbacks', FeedbackController::class);
    Route::resource('times', TimesController::class);
    Route::resource('competition_types', CompetitionTypeController::class);
    Route::resource('education_dates', EducationDateController::class);
    Route::resource('education_plans', EducationPlanController::class);
    Route::resource('education_levels', EducationLevelController::class);
});

//Route::middleware('auth')->group(function () {
//    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
//
//
//});
