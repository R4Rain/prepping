<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('subscriptions.index', [
            'subscription' => Subscription::where([['user_id', auth()->user()->id], ['expiry', '>', time()]])->first()
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {   
        Subscription::create([
            'user_id' => auth()->user()->id,
            'expiry' => Carbon::now()->addMonth()
        ]);

        return redirect()->back();
    }

    public function show(Subscription $subscription)
    {
        //
    }

    public function edit(Subscription $subscription)
    {
        //
    }

    public function update(Request $request, Subscription $subscription)
    {
        //
    }

    public function destroy(Subscription $subscription)
    {
        //
    }
}
