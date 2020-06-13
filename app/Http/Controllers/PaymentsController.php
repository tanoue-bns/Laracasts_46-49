<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class PaymentsController extends Controller
{
    public function create()
    {
        return view('payments.create');
    }

    public function store()
    {
        // Notification::send(request()->user(), new PaymentReceived());
        // ↓↓これでもいい
        request()->user()->notify(new PaymentReceived(900));
    }
}
