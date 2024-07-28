<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
        // Retrieve cart items from session or database
        $cartItems = Session::get('cart', []);
        return view('nav.cart', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        // Add item to cart
        $cart = Session::get('cart', []);
        $cart[] = $request->all();
        Session::put('cart', $cart);
        return redirect()->route('cart.index')->with('message', 'Item added to cart successfully!');
    }

    public function checkout()
    {
        // Perform checkout actions
        // Clear the cart after checkout
        Session::forget('cart');
        return redirect()->route('home')->with('message', 'Your payment has been processed successfully!');
    }
}
