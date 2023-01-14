<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
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
        Reply::create([
            'user_id' => auth()->user()->id,
            'comment_id' => $request->comment_id,
            'content' => $request->reply
        ]);

        return redirect()->back();
    }

    public function show(Reply $reply)
    {
        //
    }

    public function edit(Reply $reply)
    {
        //
    }

    public function update(Request $request, Reply $reply)
    {
        //
    }

    public function destroy(Reply $reply)
    {
        //
    }
}
