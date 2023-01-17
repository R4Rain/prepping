<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Recipe;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {   
        $recipes = Recipe::with('ratings')->get()->sortByDesc(function($recipe) { 
            return $recipe->ratings->sum('value');
        });

        $creators = User::with('recipes')->get()->sortByDesc(function($user) { 
            return $user->recipes->count();
        });

        
        return view('dashboard', [
            'category_count' => Category::all()->count(),
            'recipe_count' => Recipe::all()->count(),
            'course_count' => Course::all()->count(),
            'creator_count' => User::where('id', '!=', 1)->count(),
            'recipes' => $recipes->take(3),
            'creators' => $creators->take(3),
        ]);
    }
}
