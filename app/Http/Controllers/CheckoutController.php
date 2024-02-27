<?php

namespace App\Http\Controllers;

use Session;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    //
    public function showCheckoutForm()
    {
        $cart = session()->get('cart');
        return view('orders.checkout', compact('cart'));
    }

    public function processCheckout(Request $request)
    {
        // Validate request data
        $request->validate([
            'email' => 'required|email',
            'name' => 'required|string|max:255',
            'billing_address' => 'required|string|max:255',
            'billing_city' => 'required|string|max:255',
            'billing_postalcode' => 'required|string|max:255',
            'payment_method' => 'required|string|max:255',

        ]);

        // Process the checkout
        $cart = session()->get('cart');
        if (!$cart) {
            return redirect()->route('cart.show')->with('error', 'Your cart is empty.');
        }

        // Initialize total price
        $totalPrice = 0;

        // Loop through cart items to calculate total price
        foreach ($cart as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }


        // Creating an order
        $order = new Order();
        $order->user_id = Auth::id();
        $order->total_price = $totalPrice;
        

        $order->save();

        // Claer cart session
        session()->forget('cart');

        return redirect()->route('orders.success')->with('success', 'Order Placed Successfully :)');
    }
}
