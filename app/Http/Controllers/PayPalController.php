<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PayPalController extends Controller
{
    public function recievePayment(Request $request){
        Log::stack($request->all());
    }

    public function showDonationConfirmation(Request $request){
        dd($request->all());
    }
}
