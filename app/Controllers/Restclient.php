<?php namespace App\Controllers;

class Restclient extends BaseController
{
	public function index()
	{
		//$client = \Config\Services::curlrequest();
		//$token  = "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VybmFtZSI6IlJpZHdhbiIsImVtYWlsIjoiUmlkd2FuQGdtYWlsLmNvbSIsImlhdCI6MTY0NzYyMjU2OCwiZXhwIjoxNjQ3NjI2MTY4fQ.LRzc4jqLIbcPGhfbvNnzKboHxB2gWWXMc3lhDLqxolU";
	    //$headers = [
		//	'Authorization' => 'Bearer ' . $token
		//];
		
		//GET
		//$url    ="http://localhost/Example-Api/public/stocks";
		//$response = $client->request('GET',$url,['headers'=>$headers,'http_errors'=>false]);
		//echo $response->getBody();


		//POST
		//$url    ="http://localhost/Example-Api/public/stocks";
		//$data = [
		//	'mm' => '10000000',
		//	'bin'=> 'gdc-01-01-a',
		//	'item' => 'gil hdpe',
		//	'qty' => '100',
		//	'uom' => 'kg',
		//	'gr_date' => '2022-03-19'
		//];
		//$response = $client->request('POST',$url,['form_params'=>$data,'headers'=>$headers,/////'http_errors'=>false]);
		//echo $response->getBody();
		

		//PUT
		//$url    ="http://localhost/Example-Api/public/stocks/3";
		//$data = [
		//	'mm' => '10000000',
		//	'bin'=> 'gdc-01-01-a',
		//	'item' => 'gil hdpe',
		//	'qty' => '1000', //PARAMETER UPDATE
		//	'uom' => 'kg',
		//	'gr_date' => '2022-03-19'
		//];
		//$response = $client->request('PUT',$url,['form_params'=>$data,'headers'=>$headers,'http_errors'=>false]);
		//echo $response->getBody();

		//$url    ="http://localhost/Example-Api/public/stocks/3";
		//$data = [];
		//$response = $client->request('DELETE',$url,['form_params'=>$data,'headers'=>$headers,//'http_errors'=>false]);
		//echo $response->getBody();

		helper(['restclient']);
		$url      ="http://localhost/Example-Api/public/stocks";
		$response = access_api('GET',$url,[]);
		echo $response;
		
	}

	//--------------------------------------------------------------------

}
