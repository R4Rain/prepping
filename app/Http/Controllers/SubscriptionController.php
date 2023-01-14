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
        $request->validate([
            'subscription' => 'required|string',
        ]);

        if ($request->subscription == 'gold') {
            $expiry = Carbon::now()->addYear();
        } elseif ($request->subscription == 'plus') {
            $expiry = Carbon::now()->addMonth();
        } else {
            $expiry = Carbon::now()->addDay();
        }

        Subscription::create([
            'user_id' => auth()->user()->id,
            'expiry' => $expiry
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
