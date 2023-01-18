<?php

namespace App\Http\Controllers;

use App\Models\Community;
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

        return redirect()->back()->with('success', 'Successfully joined the community!');
    }

    public function destroy(Community $community)
    {
        CommunityDetail::where([['user_id', auth()->user()->id], ['community_id', $community->id]])->delete();

        return redirect()->back()->with('success', 'Successfully left the community!');
    }
}
