<?php

namespace App\Http\Controllers;

use App\Billings\Gateways\PaypalGateway;
use App\Billings\PaymentGatewayInterface;
use Illuminate\Http\Request;
use \Softon\Indipay\Facades\Indipay;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaymentController extends Controller
{
    public function pay(Request $request, PaymentGatewayInterface $module)
    {
        $res = $module->process($request);
        return $module->checkout($res);
    }

    public function paymentSuccess(Request $request)
    {
        dump($request->all());
        $paypal = new ExpressCheckout();
        $response = $paypal->getExpressCheckoutDetails($request->token);
        dump($response);

    }

    public function response(Request $request)
    {
        $response = Indipay::response($request);
        if($response['status'] === 'success'){
            return redirect()
                ->route('products')
                ->with('success', "Payment Done");
        }
    }

    public function indiPay()
    {
        /**
         * amount
         * productinfo
         * firstname
         * email
         * phone
         */
        $params = [
            'amount'        => $request->amount,
            'productinfo'   => 'Test product',
            'firstname'     => 'THe Test Coder',
            'email'         => 'thetestcoder@gmail.com',
            'phone'         => '123456789'
        ];

        $order = Indipay::prepare($params);
        return Indipay::process($order);
    }
}
