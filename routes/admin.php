<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CompetitionTypeController;
use App\Http\Controllers\Admin\NewsCategoryController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\SubjectController;
use App\Http\Controllers\Admin\FeedbackController;
use App\Http\Controllers\Admin\CompetitionController;
use App\Http\Controllers\Admin\MarkTypeController;
use App\Http\Controllers\Admin\TimesController;
use App\Http\Controllers\Admin\StudentStatusController;
use App\Http\Controllers\Admin\AchievementLevelController;
use App\Http\Controllers\Admin\AchievementPlaceController;
use App\Http\Controllers\Admin\EducationDateController;
use App\Http\Controllers\Admin\EducationPlanController;
use App\Http\Controllers\Admin\EducationLevelController;
use App\Http\Controllers\Admin\PositionsController;
use App\Http\Controllers\Admin\AchievementScoreController;


Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('mark-types', MarkTypeController::class);
    Route::resource('competitions', CompetitionController::class);
    Route::resource('feedbacks', FeedbackController::class);
    Route::resource('times', TimesController::class);
    Route::resource('competition_types', CompetitionTypeController::class);
    Route::resource('student-statuses', StudentStatusController::class);
    Route::resource('news-category', NewsCategoryController::class);

    Route::resource('subjects', SubjectController::class);
    Route::resource('positions', PositionsController::class);
    Route::resource('rooms', RoomController::class);
    Route::resource('achievement_levels', AchievementLevelController::class);
    Route::resource('achievement_places', AchievementPlaceController::class);
    Route::resource('achievement_scores', AchievementScoreController::class);

    Route::resource('education_dates', EducationDateController::class);
    Route::resource('education_plans', EducationPlanController::class);
    Route::resource('education_levels', EducationLevelController::class);
    Route::resource('competitions', CompetitionController::class);
    Route::resource('positions', PositionsController::class);
});

