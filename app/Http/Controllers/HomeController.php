<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Recipe;
use Illuminate\Http\Request;

class HomeController extends Controller
{   
    public function __invoke()
    {
        return view('home', [
            'recipes' => Recipe::take(8)->get(),
            'categories' => Category::all()
        ]);
    }

    public function search()
    {
        return view('search', [
            'recipes' => Recipe::latest()->filter(request(['search', 'sort']))->paginate(16)->withQueryString(),
        ]);
    }
}
