<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'recipes' => Recipe::take(5)->get(),
            'categories' => Category::all()
        ]);
    }
}
