<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        // Notification::send($request->user(), new PaymentReceived());
        $request->user()->notify(new PaymentReceived());
        return redirect()->back()->with("success", "Successfully sent");
    }
}
