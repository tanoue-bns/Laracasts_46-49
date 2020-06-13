<?php

namespace App\Http\Controllers;

use App\Events\ProductPurchased;
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

        // 49のeventの部分。Listenerに定義されたhandle()が実行される
        ProductPurchased::dispatch('toy');
    }
}
