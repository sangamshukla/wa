<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\OrderPayment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment($batchId)
    {
        // $totcart = Batch::count();
        $product = Batch::find($batchId);
        $cart = session()->get('cart');
        // if cart is empty then this the first product

        if (!$cart) {
            $cart = [
                $batchId => ["product_id" => $product->id,"quantity" => 1,
                        'price' => $product->batch_price_per_session
                        ]
                    ];
            session()->put('cart', $cart);
            
            return redirect()->back()->with('status', 'Your class added successfully in your cart!');
        }
        // if cart not empty then check if this product exist then increment quantity
        if (isset($cart[$batchId])) {
            // $cart[$batchId]['quantity']++;
            // session()->put('cart', $cart);
            return redirect()->back()->with('status', 'Your class added successfully in your cart!');
        }
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$batchId] = [
            "product_id" => $product->id,
            "quantity" => 1,
            'price' => $product->batch_price_per_session
        ];
        session()->put('cart', $cart);
        
        return redirect()->back()->with('status', 'Your class added successfully in your cart!');
    }

    public function removeFromCart($itemId)
    {
        $arr = session()->get('cart');
        unset($arr[$itemId]);
        session()->put('cart', []);
        session()->put('cart', $arr);
        return redirect(route('buy.now'))->with('status', 'Your class removed successfully !');
    }


    public function pay(Request $request)
    {
        $order = OrderPayment::create([
            'student_id' => auth()->user()->id,
            'order_amount' =>  Batch::whereIn('id', array_keys(session()->get('cart') ?? []))
                                ->sum('batch_price_per_session')
        ]);
        $b = Batch::whereIn('id', array_keys(session()->get('cart') ?? []))->get();
        
        foreach ($b as $k) {
            OrderItems::create([
                'order_payment_id' => $order->id,
                'no_of_items' => 1,
                'batch_id' => $k->id
            ]);
        }
        session()->put('cart', []);
        return view('payment.success');
    }
}
