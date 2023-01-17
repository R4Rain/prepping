<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryDetail;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RecipeController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth'])->except('index');
        $this->middleware(['user'])->except('index');
    }

    public function index()
    {   
        return view('recipes.index', [
            'categories' => Category::all()->take(10),
            'recipes' => Recipe::all()
        ]);
    }

    public function manage()
    {   
        return view('recipes.manage', [
            'recipes' => Recipe::where('user_id', auth()->user()->id)->get()
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
            if ($request->has('photo')) {
                $extension = $request->file('photo')->getClientOriginalExtension();
                $proofNameToStore = $request->input('name') . '.' . $extension;
                $request->file('photo')->storeAs('public/recipes', $proofNameToStore);
            }
            
            $recipe = Recipe::create([
                'user_id' => auth()->user()->id,
                'name' => $request->name,
                'photo' => $proofNameToStore,
                'description' => $request->description,
                'ingredients' => $request->ingredients,
                'instructions' => $request->instructions,
                'servings' => $request->servings,
                'prep_time' => $request->prep_hours * 60 + $request->prep_minutes,
                'cook_time' => $request->cook_hours * 60 + $request->cook_minutes
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
        
        return redirect()->route('recipes.index');
    }

    public function show(Recipe $recipe)
    {   
        $saved = 0;   
        foreach (auth()->user()->collections as $collection) {
            if ($collection->recipes->where('id', $recipe->id)->count() > 0) {
                $saved = 1;   
            }
        }
        
        return view('recipes.show', [
            'recipe' => $recipe,
            'rated' => $recipe->ratings()->where('user_id', auth()->user()->id)->count() > 0 ? 1 : 0,
            'saved' => $saved
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
            if ($request->hasFile('photo')) {
                if ($recipe->photo != NULL)
                    Storage::delete('public/recipes/' . $recipe->photo);
                
                $extension = $request->file('photo')->getClientOriginalExtension();
                $proofNameToStore = $request->input('name') . '.' . $extension;
                $request->file('photo')->storeAs('public/recipes/', $proofNameToStore);
            } else {
                $proofNameToStore = $recipe->photo;
            }

            $recipe->update([
                'user_id' => auth()->user()->id,
                'name' => $request->name,
                'photo' => $proofNameToStore,
                'description' => $request->description,
                'ingredients' => $request->ingredients,
                'instructions' => $request->instructions,
                'servings' => $request->servings,
                'prep_time' => $request->prep_hours * 60 + $request->prep_minutes,
                'cook_time' => $request->cook_hours * 60 + $request->cook_minutes
            ]);

            $data = [];
            foreach ($request->categories as $category) {
                $data[] = [
                    'recipe_id' => $recipe->id,
                    'category_id' => $category,
                ]; 
            }

            foreach ($recipe->categories as $category) {
                $category->delete();
            }

            CategoryDetail::insert($data);
        });

        return redirect()->route('recipes.show', $recipe);
    }

    public function destroy(Recipe $recipe)
    {
        if ($recipe->photo != NULL)
            Storage::delete('public/recipes/' . $recipe->photo);

        $recipe->delete();

        return redirect()->route('recipes.index');
    }

    public function validateRequest(Request $request)
    {   
        $request->validate([
            'name' => 'required|string',
            'categories' => 'required|array',
            'description' => 'required|string',
            'ingredients' => 'required|string',
            'instructions' => 'required|string',
            'servings' => 'required|integer',
            'photo' => 'image|mimes:jpeg,jpg,png,webp'
        ]);
    }
}
