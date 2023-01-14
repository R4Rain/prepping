<?php

namespace App\Http\Controllers;

use App\Models\CommunityDetail;
use Illuminate\Http\Request;

class CommunityDetailController extends Controller
{
    public function store(Request $request)
    {   
        CommunityDetail::create([
            'community_id' => $request->community_id,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->back();
    }
}
