<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\CompetitionController;
use App\Http\Controllers\Admin\MarkTypeController;
use App\Http\Controllers\Admin\TimesController;
use App\Http\Controllers\Admin\PositionsController;
use App\Http\Controllers\Admin\CompetitionTypeController;


Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('mark-types', MarkTypeController::class);
    Route::resource('competitions', CompetitionController::class);
    Route::resource('feedbacks', FeedbackController::class);
    Route::resource('times', TimesController::class);
    Route::resource('competition_types', CompetitionTypeController::class);
    Route::resource('competitions', CompetitionController::class);
    Route::resource('positions', PositionsController::class);

});

