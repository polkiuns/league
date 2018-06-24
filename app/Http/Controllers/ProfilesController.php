<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
class ProfilesController extends Controller
{
    public function index()
    {
    	$profile = Profile::where('user_id' , auth()->user()->id)->get();
    	return view('profiles.index' , compact('profile'));
    }
}
