<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryDetail;
use App\Models\Group;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    
    public function index()
    {   
        return view('recipes.index', [
            'recipes' => auth()->user()->recipes
        ]);
    }

    public function create()
    {
        return view('recipes.create', [
            'categories' => Category::orderBy('name', 'asc')->get()
        ]);
    }

    public function store(Request $request)
    {
        $this->validateRequest($request);

        DB::transaction(function () use($request) {
            if ($request->has('image')) {
                $extension = $request->file('image')->getClientOriginalExtension();
                $proofNameToStore = $request->input('name') . '.' . $extension;
                $request->file('image')->storeAs('public/recipes', $proofNameToStore);
            }

            $recipe = Recipe::create([
                'user_id' => auth()->user()->id,
                'name' => $request->name,
                'image' => $proofNameToStore,
                'description' => $request->description,
                'ingredients' => $request->ingredients,
                'steps' => $request->steps,
                'duration' => $request->duration,
                'serving' => $request->serving,
                'duration' => $request->duration
            ]);
            
            $data = [];
            foreach ($request->categories as $category) {
                $data[] = [
                    'recipe_id' => $recipe->id,
                    'category_id' => $category,
                ]; 
            }
            
            CategoryDetail::insert($data);
        });
        
        return redirect()->route('home');
    }

    public function show(Recipe $recipe)
    {
        return view('recipes.show', [
            'recipe' => $recipe
        ]);
    }

    public function edit(Recipe $recipe)
    {   
        $temp = Category::orderBy('name', 'asc')->get();
        $categories = [];

        foreach ($temp as $i => $category) {
            $categories[$i]['id'] = $category->id;
            $categories[$i]['name'] = $category->name;
            $categories[$i]['checked'] = 0;

            foreach ($recipe->categories as $checkedCategory) {
                if ($category->id == $checkedCategory->id) {
                    $categories[$i]['checked'] = 1;
                }
            }
        }

        return view('recipes.edit', [
            'recipe' => $recipe,
            'categories' => $categories
        ]);
    }

    public function update(Request $request, Recipe $recipe)
    {
        $this->validateRequest($request);

        DB::transaction(function () use($request, $recipe) {
            if ($request->hasFile('image')) {
                if ($recipe->image != NULL)
                    Storage::delete('public/recipes/' . $recipe->image);
                
                $extension = $request->file('image')->getClientOriginalExtension();
                $proofNameToStore = $request->input('name') . '.' . $extension;
                $request->file('image')->storeAs('public/recipes/', $proofNameToStore);
            } else {
                $proofNameToStore = $recipe->image;
            }
            
            $recipe->update([
                'user_id' => auth()->user()->id,
                'name' => $request->name,
                'image' => $proofNameToStore,
                'description' => $request->description,
                'ingredients' => $request->ingredients,
                'steps' => $request->steps,
                'duration' => $request->duration,
                'serving' => $request->serving,
                'duration' => $request->duration
            ]);
        });

        return redirect()->route('recipes.show', $recipe);
    }

    public function destroy(Recipe $recipe)
    {
        //
    }

    public function validateRequest(Request $request)
    {   
        $request->validate([
            'name' => 'required|string',
            'category.*' => 'required|integer',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'steps' => 'required|string',
            'duration' => 'required|integer',
            'serving' => 'required|integer',
            'image' => 'image|mimes:jpeg,jpg,png,webp'
        ]);
    }
}
