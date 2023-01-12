<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {   
        return view('collections.index', [
            'collections' => Collection::where('user_id', auth()->user()->id)->get()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {   
        $request->validate([
            'name' => 'required|string'
        ]);

        Collection::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name
        ]);

        return redirect()->back();
    }

    public function show(Collection $collection)
    {
        return view('collections.show', [
            'collection' => $collection
        ]);
    }

    public function edit(Collection $collection)
    {
        //
    }

    public function update(Request $request, Collection $collection)
    {
        //
    }

    public function destroy(Collection $collection)
    {
        //
    }
}
