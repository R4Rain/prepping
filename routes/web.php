<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [RecipeController::class, 'showHome']);
Route::get('/recipes', [RecipeController::class, 'showRecipes']);
Route::get('/recipes/{recipe:id}', [RecipeController::class, 'showRecipe']);

// search page
Route::get('/search', [RecipeController::class, 'showSearch']);

// create page
Route::get('/create', [RecipeController::class, 'showCreate'])->middleware('auth');
Route::post('/create', [RecipeController::class, 'createRecipe'])->middleware('auth');
// my recipes page
Route::get('/my-recipes', [RecipeController::class, 'showMyRecipe'])->middleware('auth');

// reviews
Route::post('/recipes/{recipe:id}/reviews', [ReviewController::class, 'createReview'])->middleware('auth');
Route::post('/recipes/{recipe:id}/reviews/{review:id}/edit', [ReviewController::class, 'editReview'])->middleware('auth');
Route::post('/recipes/{recipe:id}/reviews/{review:id}/delete', [ReviewController::class, 'deleteReview'])->middleware('auth');

// user profile
Route::get('/profile', [UserController::class, 'showProfile'])->middleware('auth');
Route::get('/profile/edit', [UserController::class, 'showEditProfile'])->middleware('auth');
Route::post('/profile/edit', [UserController::class, 'editProfile'])->middleware('auth');