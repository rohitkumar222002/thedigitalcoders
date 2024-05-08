<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PaymentgatewayController extends Controller
{
    protected $provider;

    public function __construct(ExpressCheckout $provider)
    {
        $this->provider = $provider;
    }
    
    public function payment(Request $request){
       
        
            $provider = new ExpressCheckout;

                    $data = [
                    'items' => [
                    [
                        'name' => '{{$packages->title}}',
                        'price' => 9.99,
                        'qty' => 1,
                           ],
                               ],
                    'invoice_id' => uniqid(),
                    'invoice_description' => 'Description for the invoice',
                    'return_url' => url('/payment/success'),
                    'cancel_url' => url('/payment/cancel'),
                    'total' => 9.99,
                ]; 

                $response = $provider->setExpressCheckout($data);

            return redirect($response['paypal_link']);

                }
                
    public function success(Request $request)
    {

        $token = $request->input('token');
        $payerId = $request->input('PayerID');
        $response = $this->provider->getExpressCheckoutDetails($token);

        $data = [
            'items' => [
                [
                    'name' => 'Product 1',
                    'price' => 9.99,
                    'qty' => 1,
                ],
            ],
            'invoice_id' => uniqid(),
            'invoice_description' => 'Description for the invoice',
            'return_url' => url('/payment/success'),
            'cancel_url' => url('/payment/cancel'),
            'total' => 9.99,
        ];
        // Set your payment details in $data

        $response = $this->provider->doExpressCheckoutPayment($data, $token, $payerId);
        dd($response);

        if($response->ACK=='Success'){
            
        }
        // Process successful payment logic here
        // You might want to update your database, send email receipts, etc.

        return view('forntend-pro.success'); // You can create a success.blade.php view
    }
}