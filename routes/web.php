<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CollectionDetailController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\CommunityDetailController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FeedController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', HomeController::class)->name('home');
Route::get('search', [HomeController::class, 'search'])->name('search');
Route::get('dashboard', DashboardController::class)->name('dashboard');



Route::prefix('recipes')->name('recipes.')->group(function () {
    Route::get('manage', [RecipeController::class, 'manage'])->name('manage');
});
Route::resource('recipes', RecipeController::class);

Route::resource('subscriptions', SubscriptionController::class);
Route::resource('comments', CommentController::class);
Route::resource('replies', ReplyController::class);
Route::resource('collections', CollectionController::class);
Route::resource('collection-details', CollectionDetailController::class);
Route::resource('ratings', RatingController::class);
Route::resource('categories', CategoryController::class);

Route::prefix('courses')->name('courses.')->group(function () {
    Route::get('manage', [CourseController::class, 'manage'])->name('manage');
});
Route::resource('courses', CourseController::class);

Route::resource('courseslessons', LessonController::class)->parameters([
    'learn' => 'course'
]);
Route::resource('communities', CommunityController::class);
Route::resource('community-details', CommunityDetailController::class);
Route::resource('feeds', FeedController::class);







