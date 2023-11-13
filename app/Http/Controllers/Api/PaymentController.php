<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Braintree\Gateway;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function checkout(Request $request)
    {
        $gateway = new Gateway([
            'environment' => 'sandbox',
            'merchantId' => env("MERCHANT_ID"),
            'publicKey' => env("PUBLIC_KEY"),
            'privateKey' => env("PRIVATE_KEY"),
        ]);

        $nonceFromTheClient = $request->input('paymentMethodNonce');

        $result = $gateway->transaction()->sale([
            'amount' => '5000.00',
            'paymentMethodNonce' => $nonceFromTheClient,
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if ($result->success) {
            return response()->json(['success' => true, 'message' => 'Payment successful']);
        } else {
            return response()->json(['success' => false, 'message' => 'Payment failed']);
        }
    }
}
