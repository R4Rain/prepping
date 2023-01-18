<?php

namespace App\Http\Controllers;

use App\Models\Community;
use App\Models\CommunityDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CommunityController extends Controller
{   
    public function __construct()
    {
        $this->middleware(['auth'])->except('index');
        $this->middleware(['user'])->only('show');
        $this->middleware(['premiumUser'])->only('create', 'store', 'edit', 'update', 'destroy');
    }

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

        $community = Community::create([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'photo' => $proofNameToStore,
            'description' => $request->description
        ]);

        CommunityDetail::create([
            'community_id' => $community->id,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('communities.index')->with('success', 'Successfully created a community!');
    }

    public function show(Community $community)
    {
        return view('communities.show', [
            'community' => $community
        ]);
    }

    public function edit(Community $community)
    {
        return view('communities.edit', [
            'community' => $community
        ]);
    }

    public function update(Request $request, Community $community)
    {
        $this->validateRequest($request);

        if ($request->hasFile('photo')) {
            if ($community->photo != NULL)
                Storage::delete('public/communities/' . $community->photo);
            
            $extension = $request->file('photo')->getClientOriginalExtension();
            $proofNameToStore = $request->input('name') . '.' . $extension;
            $request->file('photo')->storeAs('public/communities/', $proofNameToStore);
        } else {
            $proofNameToStore = $community->photo;
        }

        $community->update([
            'user_id' => auth()->user()->id,
            'name' => $request->name,
            'photo' => $proofNameToStore,
            'description' => $request->description
        ]);

        return redirect()->route('communities.show', $community)->with('success', 'Successfully updated the community!');
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
