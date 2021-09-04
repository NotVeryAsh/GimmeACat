<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayPalController extends Controller
{
    public function recievePayment(Request $request){
        Log::stack($request->all());
    }
}
