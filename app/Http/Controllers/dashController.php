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
    	$client = new Client([
    		'base_url'=>'https://api.github.com'
    		
    		]);

    	$repos=$client->request(
    		'Get',
    		'https://api.github.com/users/lukyman/repos'
    		);

    	$repo_list =(String)$repos->getBody();
    	return $repo_list;
    	//return view('gitview.dash',['repo_list'=>$repo_list]);

    	//echo $gitUser();

    }
}
