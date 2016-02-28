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

    	$repo_list =(string)$repos->getBody()->getContents();
   		$repo_list_json = json_decode($repo_list);

   		//return $repo_list_json;
   		$all_repo=[];

   		for ($i=0;$i<count($repo_list_json);$i++ ) {
   			# code...
   			$all_repo[$i]=(array)$repo_list_json[$i];
   		}
   		//return $all_repo;
    	
    	return view('gitview.dash',['repo_list'=>$all_repo]);


    }
}
