<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateRequest($request);
        Rating::create([
            'user_id' => auth()->user()->id,
            'recipe_id' => $request->recipe_id,
            'value' => $request->value,
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $rating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function edit(Rating $rating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rating  $rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rating $rating)
    {
        $this->validateRequest($request);
        $rating->update([
            'value' => $request->value,
        ]);
        return redirect()->back();
    }

    public function destroy(Rating $rating)
    {
        $rating->delete();
        return redirect()->back();
    }

    public function validateRequest(Request $request){
        $request->validate([
            'recipe_id' => 'required',
            'value' => 'integer|min:1|max:5'
        ]);
    }
}
