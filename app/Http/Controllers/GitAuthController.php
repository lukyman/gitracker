<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Socialite;

class GitAuthController extends Controller
{
    //

    public function requestGitLogin()
    {
    	
    	return Socialite::driver('github')->redirect();

    	//$client = new Client();


    }

    public function GitAuthCallback()
    {
    	# code...
    	echo Socialite::driver('github')->user();

    }


}
