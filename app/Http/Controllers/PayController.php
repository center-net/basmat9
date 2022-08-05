<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayController extends Controller
{
    public function process(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'amount' => 'required_without:amount_value',
            'amount_value' => 'required_without:amount',
        ], [
            'amount.required_without' => 'يرجى ادخال قيمة دفع',
            'amount_value.required_without' => 'يرجى ادخال قيمة دفع',
        ]);
        $amount = $request->amount;
        if ($request->has('amount_value') and $request->amount_value != null) {
            $amount = $request->amount_value;
        }
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $paypalToken = $provider->getAccessToken();

        $response = $provider->createOrder([
            "intent" => "CAPTURE",
            "application_context" => [
                "return_url" => route('paypal.successTransaction'),
                "cancel_url" => route('paypal.cancelTransaction'),
            ],
            "purchase_units" => [
                0 => [
                    "amount" => [
                        "currency_code" => "USD",
                        "value" => $amount
                    ]
                ]
            ]
        ]);

        if (isset($response['id']) && $response['id'] != null) {
            foreach ($response['links'] as $links) {
                if ($links['rel'] == 'approve') {
                    return redirect()->away($links['href']);
                }
            }
            session()->flash('error', 'عذرًا، حدث خطأ ما');
            return redirect()
                ->route('donte');

        } else {
            session()->flash('error', 'عذرًا، حدث خطأ ما');
            return redirect()
                ->route('donte');
        }
    }

    public function success(Request $request): \Illuminate\Http\RedirectResponse
    {
        $provider = new PayPalClient;
        $provider->setApiCredentials(config('paypal'));
        $provider->getAccessToken();
        $response = $provider->capturePaymentOrder($request['token']);

        if (isset($response['status']) && $response['status'] == 'COMPLETED') {
            return redirect()
                ->route('donte')
                ->with('success', 'تم اكمال الدفع بنجاح');
        } else {
            session()->flash('error', 'عذرًا، حدث خطأ ما');
            return redirect()
                ->route('donte');
        }
    }

    public function cancel(): \Illuminate\Http\RedirectResponse
    {
        session()->flash('error', 'عذرًا، حدث خطأ ما');
        return redirect()
            ->route('donte');
    }
}
