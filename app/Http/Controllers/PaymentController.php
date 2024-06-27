<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session as FacedesSession;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function checkout()
    {
        $cart = FacedesSession::get('cart', []);

        return view('payments.checkout', compact('cart'));
    }

    public function createCheckoutSession()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $cart = FacedesSession::get('cart', []);

        $lineItems = [];
        foreach ($cart as $id => $item) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $item['name'],
                    ],
                    'unit_amount' => $item['price'] * 100,
                ],
                'quantity' => $item['quantity'],
            ];
        }

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems,
            'mode' => 'payment',
            'success_url' => route('payments.success'),
            'cancel_url' => route('payments.cancel'),
        ]);

        return redirect($session->url, 303);
    }

    public function success()
    {
        return view('payments.success');
    }

    public function cancel()
    {
        return view('payments.cancel');
    }
}
