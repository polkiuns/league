<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SummonersController extends Controller
{
    public function index()
    {
    	return view('summoners.index');
    }

    public function create(Request $request)
    {
				$curl = curl_init();

				curl_setopt_array($curl, array(
				    CURLOPT_URL => "https://euw1.api.riotgames.com/lol/summoner/v3/summoners/by-name/".$request->name."?api_key=RGAPI-2837318e-e134-45d8-9e0d-c3cbbb4eef3b",
				    CURLOPT_RETURNTRANSFER => true,
				    CURLOPT_ENCODING => "",
				    CURLOPT_TIMEOUT => 30000,
				    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				    CURLOPT_CUSTOMREQUEST => "GET",
				    CURLOPT_HTTPHEADER => array(
				    	// Set Here Your Requesred Headers
				        'Content-Type: application/json',
				    ),
				));
				$response = curl_exec($curl);
				$err = curl_error($curl);
				curl_close($curl);

				if ($err) {
				   echo "cURL Error #:" . $err;
				} else {
				    print_r(json_decode($response));
				}
    }
}
