<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    public function getRandomCat(){
        $result = Http::get('https://api.thecatapi.com/v1/images/search');
        return($result->json());
    }
}
