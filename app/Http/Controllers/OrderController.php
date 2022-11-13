<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order(Request $request){
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = 'SB-Mid-server-oV9zLKv72azyUqhH7b97HRk0';
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $user = User::find(1);
        
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => 50000,
            ),
            'customer_details' => array(
                'username' => $user['username'],
                'name' => $user['nama'],
                'universitas' => $user['universitas']
            ),
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);
    }
}
