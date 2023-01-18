<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use App\Models\CollectionDetail;
use App\Models\Recipe;
use Illuminate\Http\Request;

class CollectionDetailController extends Controller
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
        $data = [];
        foreach ($request->collections as $collection) {
            $data[] = [
                'collection_id' => $collection,
                'recipe_id' => $request->recipe_id,
            ]; 
        }

        CollectionDetail::insert($data);

        return redirect()->back()->with('success', 'Successfully added the recipe!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CollectionDetail  $collectionDetail
     * @return \Illuminate\Http\Response
     */
    public function show(CollectionDetail $collectionDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CollectionDetail  $collectionDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(CollectionDetail $collectionDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CollectionDetail  $collectionDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CollectionDetail $collectionDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CollectionDetail  $collectionDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collection $collection, Recipe $recipe)
    {   
        CollectionDetail::where([['recipe_id', $recipe->id], ['collection_id', $collection->id]])->delete();

        return redirect()->back()->with('success', 'Successfully deleted the recipe!');
    }
}
