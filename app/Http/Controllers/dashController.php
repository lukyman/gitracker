<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Socialite;

class dashController extends Controller
{
    //

    public function getDash()
    {
    	//$gitUser = Socialite::driver('github')->user();
    	$client = new Client();

    	//echo $gitUser();
    }
}
