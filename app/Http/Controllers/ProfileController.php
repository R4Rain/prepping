<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __invoke()
    {   
        return view('profile');
    }

    public function update(Request $request, User $user)
    {   
        if ($request->hasFile('photo')) {
            if ($user->photo != NULL)
                Storage::delete('public/users/' . $user->photo);
            
            $extension = $request->file('photo')->getClientOriginalExtension();
            $proofNameToStore = $request->input('name') . '.' . $extension;
            $request->file('photo')->storeAs('public/users/', $proofNameToStore);
        } else {
            $proofNameToStore = $user->photo;
        }
        
        $user->update([
            'name' => $request->name,
            'photo' => $proofNameToStore
        ]);

        return redirect()->back();
    }
}
