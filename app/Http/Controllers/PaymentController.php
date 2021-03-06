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
use Illuminate\Support\Facades\DB;
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
<<<<<<< HEAD
         $s = 0;
        // foreach (session()->get('cart') as $key => $cart) {
        //     $s++;
        // }
        $batchAmount = Batch::whereIn('id', array_keys(session()->get('cart') ?? []))
        ->sum('batch_price_per_session');
           $amount = $s*$batchAmount;


        $order = OrderPayment::create([
            'student_id' => auth()->user()->id,
            'order_amount' =>  Batch::whereIn('id', array_keys(session()->get('cart') ?? []))
                ->sum('batch_price_per_session'),
            'paid_amount'=>Batch::whereIn('id', array_keys(session()->get('cart') ?? []))
                ->sum('batch_price_per_session'),
=======
        $s = 0;
        foreach (session()->get('cart') as $key => $cart) {
            $s++;
        }
        $batchAmount = Batch::whereIn('id', array_keys(session()->get('cart') ?? []))
        ->sum('batch_price_per_session');
        $order = OrderPayment::create([
            'student_id' => auth()->user()->id,
            'order_amount' =>  $s*$batchAmount
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
        ]);

        foreach (session()->get('cart') as $key => $cart) {
            OrderItems::create([
                'order_payment_id' => $order->id,
                'no_of_items' => 1,
                'batch_id' => $cart['product_id'],
            ]);

            foreach ($cart['session_id'] as $singleSession) {
<<<<<<< HEAD
                $s++;
=======
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
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
<<<<<<< HEAD

         \Stripe\Stripe::setApiKey('sk_test_51JAvqVSBWoxgIfNeH50XuVJ06GJPhUNyB9jQJLgUQOtYmjTyVK7cLVhbLGOvgdMgsyIwX4jbUDcjokHQYaPcTaBv0018VNQaS7');
        header('Content-Type: application/json');
        $YOUR_DOMAIN = 'http://wallingtonacademy-env.eba-59ypexia.us-east-2.elasticbeanstalk.com';
=======
        // use stripe
        $amount = $s*$batchAmount;
        \Stripe\Stripe::setApiKey('sk_test_51JAvqVSBWoxgIfNeH50XuVJ06GJPhUNyB9jQJLgUQOtYmjTyVK7cLVhbLGOvgdMgsyIwX4jbUDcjokHQYaPcTaBv0018VNQaS7');
        header('Content-Type: application/json');
        $YOUR_DOMAIN = 'http://wa.test';
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
        $checkout_session = \Stripe\Checkout\Session::create([
        'payment_method_types' => ['card'],
        'line_items' => [[
            'price_data' => [
            'currency' => 'eur',
            'unit_amount' => $amount*100,
            'product_data' => [
                'name' => 'Wallington Session',
<<<<<<< HEAD
                'images' => ["http://wallingtonacademy-env.eba-59ypexia.us-east-2.elasticbeanstalk.com/wa/assets/img/logo.png"],
=======
                'images' => ["http://pariharz.com/testing/public/wa/assets/img/logo.png"],
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
            ],
            ],
            'quantity' => 1,
        ]],
        'mode' => 'payment',
        'success_url' => $YOUR_DOMAIN . '/payment-success',
        'cancel_url' => $YOUR_DOMAIN . '/payment-failed',
        ]);
<<<<<<< HEAD
=======

>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
        header("HTTP/1.1 303 See Other");
        header("Location: " . $checkout_session->url);
        // session()->put('cart', []);
        // return view('payment.success');
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
<<<<<<< HEAD
         $s = 0;
        foreach (session()->get('cart') as $key => $cart) {

             foreach ($cart['session_id'] as $singleSession) {
                 $s = $s+1;
             }
        }
        //dd($s);
        $batchAmount = Batch::whereIn('id', array_keys(session()->get('cart') ?? []))
        ->sum('batch_price_per_session');
=======
        $s = 0;
        foreach (session()->get('cart') as $key => $cart) {
            $s++;
        }
        $batchAmount = Batch::whereIn('id', array_keys(session()->get('cart') ?? []))
        ->sum('batch_price_per_session');
        // status
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
        // check for duplicate
        if ($this->checkForDuplicate(request('student_id'))) {
            return redirect(route('teacher.management'))->with('status', 'Student Has Been Enroll Successfully!');
        }
<<<<<<< HEAD
        // status
=======
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
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

    public function checkForDuplicate($studentId)
    {
        foreach (session()->get('cart') as $key => $cart) {
            $orderItems = OrderItems::where('batch_id', $cart['product_id'])->get();
            foreach ($orderItems as $item) {
                if ($item->orderPayment->student_id == $studentId) {
                    return true;
                }
            }
        }
        return false;
<<<<<<< HEAD
    }
    public function havePurchased($studentId, $sessionId)
    {
        $order=DB::table('order_payments')->join('order_session_maps', 'order_payments.id', '=', 'order_session_maps.order_id')
        ->where('student_id', $studentId)
        ->where('session_id', $sessionId)
        ->exists();
        return $order;
    }
     public function checkPurchased()
    {
        if($this->havePurchased(32, 175))
        {
            dd("have purchased");
        }
        else
        {
            dd('have not purchased');
        }
=======
>>>>>>> 62b9ca228a5128571e8a656e2897ee654d780fd9
    }
}
