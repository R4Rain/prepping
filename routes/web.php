<?php

use App\Http\Controllers\CollectionController;
use App\Http\Controllers\CollectionDetailController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\SubscriptionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::resource('recipes', RecipeController::class);
Route::resource('subscriptions', SubscriptionController::class);

Route::prefix('groups')->name('groups.')->group(function () {
    Route::get('query', [GroupController::class, 'query'])->name('query');
});

Route::resource('comments', CommentController::class);
Route::resource('replies', ReplyController::class);
Route::resource('collections', CollectionController::class);
Route::resource('collection-details', CollectionDetailController::class);
Route::resource('ratings', RatingController::class);





