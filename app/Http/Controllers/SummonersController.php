<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Summoner;
class SummonersController extends Controller
{
    public function index()
    {
    	if(Summoner::where('user_id' , auth()->user()->id)->get())
    	{
    		$summoner = Summoner::where('user_id' , auth()->user()->id)->first();
    	}

    	return view('summoners.index' , compact('summoner'));
    }

    public function create(Request $request)
    {

				$curl = curl_init();

				curl_setopt_array($curl, array(
				    CURLOPT_URL => "https://euw1.api.riotgames.com/lol/summoner/v3/summoners/by-name/".$request->name."?api_key=RGAPI-11a7e300-8fed-4737-987f-1d5370d8b8ef",
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
				    print_r($response);
				}
    }

    public function store(Request $request)
    {
        $request->validate([

        ]);
    	$summoner = new Summoner;
    	$summoner->name = $request->name;
    	$summoner->level = $request->summonerLevel;
    	$summoner->summoner_id = $request->id;
    	$summoner->account_id = $request->accountId;
    	$summoner->profile_icon = $request->profileIconId;
    	$summoner->user_id = auth()->user()->id;
    	$summoner->save();

    	return back()->with('flash' , 'Summoner agregado correctamente');
    }

    public function show()
    {
        return view('summoners.show');
    }
}
