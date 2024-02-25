<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public function addToCart(Request $request, $productId)
    {
        if(!Auth::check())
        {
            return redirect()->route('register')->with('error', 'Please log in to add to cart');
        }
        
        $product = Product::findOrFail($productId);
        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function showCart()
    {
        $cart = session()->get('cart');
        return view('orders.cart', compact('cart'));
    }

    public function removeFromCart(Request $request, $productId)
    {
        $cart = session()->get('cart');

        if (isset($cart[$productId])) {
            if ($cart[$productId]['quantity'] > 1) {
                $cart[$productId]['quantity']--;
            } else {
                unset($cart[$productId]);
            }

            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Product removed from cart successfully');
    }
}
