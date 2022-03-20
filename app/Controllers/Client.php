<?php namespace App\Controllers;

class Client extends BaseController
{
	public function index()
	{
	  helper('helper');
	  $url = "http://localhost/Example-Api/public/stocks";
	  $response = akses_api('GET',$url,[]);
	  echo $response; 
	}

	//--------------------------------------------------------------------

}
