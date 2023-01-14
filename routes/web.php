<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CollectionDetailController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('search', [HomeController::class, 'search'])->name('search');


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
Route::resource('learn', CourseController::class)->parameters([
    'learn' => 'course'
]);
Route::resource('learn.lessons', LessonController::class)->parameters([
    'learn' => 'course'
]);





