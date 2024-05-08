<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\Stripe;

class PaymentController extends Controller
{
  
    public function showPaymentForm()
    {
        return view('payment.form');
    }

    public function processPayment(Request $request)
    {

        dd($request);
        // Set your Stripe secret key
        Stripe::setApiKey(config('services.stripe.secret'));

        $customer = Stripe\Customer::create([
            "addresss"=>[
                "line1"=>"Rohit",
                "postal_code"=>'176057',
                "city"=>"Dharamshala",
                "state"=>"HP",
                "country"=>"IN",
            ],
            "email"=>"rohit@gmail.com",
            "name"=>"John Doe",
            "source"=>$request->stripeToken
        ]);

        dd($customer);
        
        try {
            // Check if the payment source (token) is available in the request
            if (!$request->has('stripeToken')) {
                throw new \Exception('Stripe token is missing.');
            }

            // Create a charge using the provided token
            $charge = Charge::create([
                'amount' => 1000,  // Amount in cents
                'currency' => 'usd',
                'source' => $request->stripeToken,  // Token obtained from the client-side using Stripe.js
                'description' => 'Test Payment',
            ]);

            // Handle the charge response as needed

            // Redirect with success message
            return redirect('/payment')->with('success', 'Payment successful!');
        } catch (\Exception $e) {
            // Redirect with error message
            return redirect('/payment')->with('error', $e->getMessage());
        }
    }
}
