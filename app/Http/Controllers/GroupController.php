<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function query()
    {
        $groups = Group::where('category_id', request()->input('category_id'))->pluck('name','id');
        
        return response()->json($groups);
    }
}
