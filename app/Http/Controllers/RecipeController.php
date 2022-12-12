<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    //
    public function showRecipes(){
        $recipes = Recipe::withAvg('reviews', 'rate')->get();
        return view('recipes', [
            'recipes' => $recipes
        ]);
    }

    public function showHome(){
        return view('home');
    }

    public function showRecipe(Recipe $recipe){
        $user_id = (auth()->user()) ? auth()->user()->id : null;
        $user_review = null;
        if($user_id){
            $user_review = $recipe->reviews()->where('user_id', $user_id)->first();
        }
        return view('recipe', [
            'recipe' => $recipe,
            'reviews' => $recipe->reviews()->paginate(8)->withQueryString(),
            'user_review' => $user_review,
            'average_reviews' => $recipe->reviews()->avg('rate'),
        ]);
    }

    public function showSearch(){
        $recipes = Recipe::withAvg('reviews', 'rate');
        return view('search', [
            'recipes' => $recipes->filter(request(['search', 'sort']))->paginate(8)->withQueryString(),
        ]);
    }

    public function showCreate(){
        return view('create');
    }

    public function showMyRecipe(){
        $user_id = auth()->user()->id;
        return view('my_recipes', [
            'recipes' => Recipe::where('user_id', $user_id)->get()
        ]);
    }

    public function createRecipe(Request $request){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'image' => 'image|file|max:2048',
            'description' => 'required',
            'ingredients' => 'required',
            'methods' => 'required',
            'duration' => 'required|integer|min:1|max:1439'
        ]);
        if($request->file('image')){
            $validated['image'] = $request->file('image')->store('uploaded');
        } else{
            $validated['image'] = null;
        }
        $validated['user_id'] = auth()->user()->id;
        Recipe::create([
            'title' => $validated['title'],
            'duration' => $validated['duration'],
            'image' => $validated['image'],
            'description' => $validated['description'],
            'ingredients' => $validated['ingredients'],
            'methods' => $validated['methods'],
            'user_id' => $validated['user_id']
        ]);
        return redirect('/recipes');
    }
}
