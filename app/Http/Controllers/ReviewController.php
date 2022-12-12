<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //
    public function createReview(Recipe $recipe, Request $request){
        $validated = $request->validate([
            'rate' => 'integer|min:1|max:5',
            'comment' => 'nullable',
        ]);
        $validated['user_id'] = (isset(auth()->user()->id)) ? auth()->user()->id : null;
        if(!$validated['user_id']){
            return back()->with(['message', 'Please login first...']);
        }
        $validated['recipe_id'] = $recipe->id;
        
        Review::create([
            'comment' => $validated['comment'],
            'rate' => $validated['rate'],
            'user_id' => $validated['user_id'],
            'recipe_id' => $validated['recipe_id']
        ]);
        return redirect('recipes/'.$recipe->id);
    }
    public function editReview(Recipe $recipe, Review $review, Request $request){
        $validated = $request->validate([
            'rate' => 'integer|min:1|max:5',
            'comment' => 'nullable',
        ]);
        Review::where('id', $review->id)->update([
            'rate' => $validated['rate'],
            'comment' => $validated['comment']
        ]);
        return redirect('recipes/'. $recipe->id);
    }
    public function deleteReview(Recipe $recipe, Review $review){
        Review::where('id', $review->id)->delete();
        return redirect('recipes/'. $recipe->id);
    }
}
