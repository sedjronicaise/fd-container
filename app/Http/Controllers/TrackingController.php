<?php

namespace App\Http\Controllers;

use App\Client;

use Illuminate\Http\Request;

class TrackingController extends Controller
{
    public function track(Request $request) {
        
        $trackingNumber = $request->input('tracking_number', '');
        
        $client = Client::where('tracking_number', $trackingNumber)->first();
        
        return view('tracking', compact('client'));
    }
}

