<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function showProfile(){
        return view('profile');
    }
    public function showEditProfile(){
        return view('profile-edit');
    }
    public function editProfile(Request $request){
        if(Auth::user()){
            $user_id = Auth::user()->id;
            $validated = $request->validate([
                'name' => 'required|string',
                'email' => 'required|unique:users,email,' . $user_id,
                'password' => 'required|current_password',
            ]);
            User::where('id', $user_id)->update([
                'name' => $validated['name'],
                'email' => $validated['email'],
            ]);
            return redirect('/profile');
        } else{
            return redirect('/profile/edit')->withErrors(['session', 'Error occured, please try to log in again']);
        }
    }
}
