<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payment;
use Razorpay\Api\Api;
use Illuminate\Support\Facades\Session;

class MainController extends Controller
{
    private $api;

    public function __construct()
    {
        $this->api = new Api('key','secret');
    }

    public function index(){
        return view('index');
    }

    public function success(){
        return view('success');
    }

    public function payment(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required',
       
        ]);

        $name = $request->input('name');
        $amount  = $request->input('amount');
        $mobile   = $request->input('mobile');
     

        $order = $this->api->order->create(array('receipt' => '456','amount' => $amount*100
        ,'currency' => 'INR','payment_capture' => 1)
        );
        $orderId = $order['id'];

        $user_pay = new payment();
        $user_pay->name = $name;
        $user_pay->amount = $amount;
        $user_pay->mobile = $mobile;
        $user_pay->payment_id = $orderId;
        $user_pay->save();

        Session::put('order_id',$orderId);
        Session::put('amount',$amount);

        return redirect()->route('payme');
    }

    public function payme(){
        return view('payment2');
    }

    // public function pay(Request $request)
    // {
    // //    $orderId = Session::get('order_id');
    //    $amount = Session::get('amount');
    //    $payment_id = Session::get('payment_id');
    //    $request->validate([
    //     'card_number' => 'required',
    //     'exp_month' => 'required',
    //     'exp_year' => 'required',
    //     'cvv' => 'required',
    //     ]);
    //     $card_number = $request->input('card_number');
    //     $exp_month = $request->input('exp_month');
    //     $exp_year = $request->input('exp_year');
    //     $cvv = $request->input('cvv');
    //     $payment = $this->api->payment->create(array(
    //         'amount' => $amount*100,
    //         'currency' => 'INR',
    //         'payment_method_types' => array('card'),
    //         'card' => array(
    //             'number' => $card_number,
    //             'exp_month' => $exp_month,
    //             'exp_year' => $exp_year,
    //             'cvv' => $cvv,
    //             ),
    //             'capture' => true,
    //             'order_id' => $orderId,
    //             )
    //             );
    //             if($payment->status == 'succeeded'){
    //                 $user_pay = payment::where('payment_id',$orderId)->first();
    //                 $user_pay->status = 'success';
    //                 $user_pay->save();
    //                 return redirect()->route('payme');
    //                 }else{
    //                     $user_pay = payment::where('payment_id',$orderId)->first();
    //                     $user_pay->status = 'failed';
    //                     $user_pay->save();
    //                     return redirect()->route('failed');
    //                     }
    //                     }

    
}
