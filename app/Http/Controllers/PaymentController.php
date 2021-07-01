<?php

namespace App\Http\Controllers;

use App\Models\Batch;
use App\Models\Order;
use App\Models\OrderItems;
use App\Models\OrderPayment;
use App\Models\OrderSessionMap;
use App\Models\OrderSessions;
use App\Models\Transaction;
use Carbon\Exceptions\InvalidFormatException;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function payment($batchId)
    {
        // $totcart = Batch::count();
        $product = Batch::find($batchId);
        $sessions = $product->batchSession->where('start_date_time', '>=', \Carbon\Carbon::today())->pluck('id');
        $sessionId = '';
        foreach ($sessions as $s) {
            $sessionId .= ','.$s;
        }
        if (request('session_id')) {
            $sessionId = ltrim(request('session_id'), ',');
        } else {
            $sessionId = ltrim($sessionId, ',');
        }

        $cart = session()->get('cart');
        // if cart is empty then this the first product

        if (!$cart) {
            $cart = [
                $batchId => [
                    "product_id" => $product->id, "quantity" => 1,
                    'price' => $product->batch_price_per_session,
                    'session_id'=>explode(',', $sessionId)
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
            'price' => $product->batch_price_per_session,
            'session_id'=>explode(',', $sessionId)
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
    // public function payforsuccess(Request $request)
    // {
    //     return view('payment.success');
    // }

    public function pay(Request $request)
    {
        $order = OrderPayment::create([
            'student_id' => auth()->user()->id,
            'order_amount' =>  Batch::whereIn('id', array_keys(session()->get('cart') ?? []))
                ->sum('batch_price_per_session')
        ]);

        foreach (session()->get('cart') as $key => $cart) {
            OrderItems::create([
                'order_payment_id' => $order->id,
                'no_of_items' => 1,
                'batch_id' => $cart['product_id'],
            ]);

            foreach ($cart['session_id'] as $singleSession) {
                OrderSessionMap::create([
                    'batch_id' => $cart['product_id'],
                    'session_id'=> $singleSession,
                    'order_id' => $order->id
                ]);
            }
        }
        Transaction::create([
            'order_id' => $order->id,
            'payment_status' => 'yes'
        ]);
        session()->put('cart', []);
        return view('payment.success');
    }

    /**
     * Payment By Operation
     * @param mixed $batchId
     * @return void
     * @throws InvalidFormatException
     * @throws BindingResolutionException
     */
    public function operationPayment(Request $request, $batchId)
    {
        // dd($request->paid_amount);
        $product = Batch::find($batchId);
        $sessions = $product->batchSession->where('start_date_time', '>=', \Carbon\Carbon::today())->pluck('id');
        $sessionId = '';
        foreach ($sessions as $s) {
            $sessionId .= ','.$s;
        }
        if (request('session_id')) {
            $sessionId = ltrim(request('session_id'), ',');
        } else {
            $sessionId = ltrim($sessionId, ',');
        }
        $cart = [
            $batchId => [
                "product_id" => $product->id, "quantity" => 1,
                'price' => $product->batch_price_per_session,
                'session_id'=>explode(',', $sessionId)
            ]
        ];
        session()->put('cart', $cart);
        $s = 0;
        foreach (session()->get('cart') as $key => $cart) {
            $s++;
        }
        $batchAmount = Batch::whereIn('id', array_keys(session()->get('cart') ?? []))
        ->sum('batch_price_per_session');
        // status
        $order = OrderPayment::create([
            'student_id' => request('student_id'),
            'order_amount' =>  $s*$batchAmount,
            'paid_amount'=>$request->paid_amount
        ]);

        foreach (session()->get('cart') as $key => $cart) {
            OrderItems::create([
                'order_payment_id' => $order->id,
                'no_of_items' => 1,
                'batch_id' => $cart['product_id'],
            ]);

            foreach ($cart['session_id'] as $singleSession) {
                OrderSessionMap::create([
                    'batch_id' => $cart['product_id'],
                    'session_id'=> $singleSession,
                    'order_id' => $order->id
                ]);
            }
        }
        Transaction::create([
            'order_id' => $order->id,
            'payment_status' => 'yes'
        ]);
        session()->put('cart', []);
        // redirect to success page
        return redirect(route('teacher.management'))->with('status', 'Student Has Been Enroll Successfully!');
    }
}
