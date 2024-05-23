<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Subscriber;
use App\Mail\SubscriptionThankYou;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the request
        $request->validate([
            'email' => 'required|email|unique:subscribers,email', // Assuming 'subscribers' table for storing emails
        ]);

        // Store the email in your database
        Subscriber::create(['email' => $request->email]);

        // Send a thank-you email to the user
        Mail::to($request->email)->send(new SubscriptionThankYou());

        // Redirect back or to a thank you page
        return redirect()->back()->with('success', 'Subscription successful! Thank you for subscribing.');
    }


    public function getTotalSubscribers()
    {
        $totalSubscribers = Subscriber::count();
        return response()->json(['totalSubscribers' => $totalSubscribers]);
    }

    public function showSubscribers()
    {
        $subscribers = Subscriber::all();
        $totalSubscribers = Subscriber::count();
        return view('admin.subscribers', compact('subscribers', 'totalSubscribers'));
    }

//     public function subscriberTotal()
// {
//     $subscribers = Subscriber::all();
//     $totalSubscribers = Subscriber::count();
//     return view('admin.subscribers', compact('subscribers', 'totalSubscribers'));
// }

}

