<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment($id)
    {
        $product = Batch::find($id);
        $cart = session()->get('cart');
        // if cart is empty then this the first product

        if (!$cart) {
            $cart = [
                $id => ["product_id" => $product->id,"quantity" => 1,
                        'price' => $product->batch_price_per_session
                        ]
                    ];
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$id])) {
            // $cart[$id]['quantity']++;
            // session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "product_id" => $product->id,
            "quantity" => 1,
            'price' => $product->batch_price_per_session
        ];
        session()->put('cart', $cart);
        
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
}
