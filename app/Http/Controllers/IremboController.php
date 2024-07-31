<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IremboController extends Controller
{
    //
    public function test_payment()
    {
        return Inertia::render('Irembo/TestPayment');
    }
    public function test_payment_store(Request $request)
    {
        $client = new Client();

        $reference = 'txn_' . time(); // Unique transaction reference
        $data = [
            'tx_ref' => $reference,
            'amount' => $request->amount,
            'currency' => 'NGN',
            'redirect_url' => route('irembo.payment.callback'),
            'payment_options' => 'card,banktransfer',
            'customer' => [
                'email' => 'byamungulewis@gmail.com',
                'name' => $request->name,
            ],
            'customizations' => [
                'title' => 'Payment for Service',
                'description' => 'Payment for XYZ service',
            ]
        ];

        $response = $client->request('POST', 'https://api.flutterwave.com/v3/payments', [
            'headers' => [
                'Authorization' => 'Bearer ' . config('services.flutterwave.secret_key'),
                'Content-Type' => 'application/json',
            ],
            'json' => $data,
        ]);

        $responseBody = json_decode($response->getBody(), true);


        if ($responseBody['status'] !== 'success') {
            return redirect()->back()->with('error', 'Unable to initiate payment');
        }

        return redirect($responseBody['data']['link']);
    }
}
