<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function index()
    {
        return view('communities.index', [
            'communities' => Community::all()
        ]);
    }

    public function create()
    {
        return view('communities.create');
    }

    public function store(Request $request)
    {
        $this->validateRequest($request);

        if ($request->has('photo')) {
            $extension = $request->file('photo')->getClientOriginalExtension();
            $proofNameToStore = $request->input('name') . '.' . $extension;
            $request->file('photo')->storeAs('public/communities', $proofNameToStore);
        }

        Community::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'photo' => $proofNameToStore,
            'description' => $request->description
        ]);

        return redirect()->route('communities.index');
    }

    public function show(Community $community)
    {
        return view('communities.show', [
            'community' => $community
        ]);
    }

    public function edit(Community $community)
    {
        //
    }

    public function update(Request $request, Community $community)
    {
        //
    }

    public function destroy(Community $community)
    {
        //
    }

    public function validateRequest(Request $request)
    {   
        $request->validate([
            'name' => 'required|string|max:20',
            'photo' => 'image|mimes:jpeg,jpg,png,webp',
            'description' => 'string'
        ]);
    }
}
