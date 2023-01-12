<?php

namespace App\Http\Controllers;

use App\Models\CollectionDetail;
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

        return redirect()->back();
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
    public function destroy(CollectionDetail $collectionDetail)
    {
        //
    }
}
