<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NgSignServiceController extends Controller
{
    public function getTransaction(){
        $token = 'your_token_goes_here';
        $client = new \GuzzleHttp\Client(['verify' => false]); //init http 
            //test api
        $response = $client->request('GET', 'https://catfact.ninja/fact', [
            'headers' => [
                'Authorization' => 'Bearer '.$token,
                'Accept' => 'application/json',
             ]
        ]);

            //
        $data = json_decode($response->getBody()); 

        return ($data);
    }
    
}
