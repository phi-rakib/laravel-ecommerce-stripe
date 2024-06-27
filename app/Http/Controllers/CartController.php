<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        $carts = Session::get('cart', []);

        return view('carts.index', compact('carts'));
    }

    public function add(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        $cart = Session::get('cart', []);

        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity']++;
        } else {
            $cart[$product->id] = [
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
            ];
        }

        Session::put('cart', $cart);

        return to_route('carts.index')->with('success', 'Product added to cart successfully');
    }
}
