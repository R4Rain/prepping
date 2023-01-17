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
        return view('dashboard', [
            'categories' => Category::all(),
            'recipes' => Recipe::all(),
            'courses' => Course::all(),
            'users' => User::where('id', '!=', 1)->get()
        ]);
    }
}
