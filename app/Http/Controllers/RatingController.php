<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Rating::create([
            'user_id' => auth()->user()->id,
            'recipe_id' => $request->recipe_id,
            'value' => $request->value,
        ]);
        return redirect()->back()->with('success', 'Successfully rate!');
    }

    public function show(Rating $rating)
    {
        //
    }

    public function edit(Rating $rating)
    {
        //
    }

 
    public function update(Request $request, Rating $rating)
    {
        //
    }

    public function destroy(Rating $rating)
    {
        //
    }
}
