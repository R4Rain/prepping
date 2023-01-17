<?php

namespace App\Http\Controllers;

use App\Models\Feed;
use Illuminate\Http\Request;

class FeedController extends Controller
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
        Feed::create([
            'description' => $request->description,
            'recipe_id' => $request->recipe_id,
            'community_detail_id' => $request->community_detail_id
        ]);

        return redirect()->back();
    }

    public function show(Feed $feed)
    {
        //
    }

    public function edit(Feed $feed)
    {
        //
    }

    public function update(Request $request, Feed $feed)
    {
        //
    }

    public function destroy(Feed $feed)
    {
        $feed->delete();
        
        return redirect()->back();
    }
}
