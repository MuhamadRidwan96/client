<?php

use App\Models\ModelToken;

function access_api($method,$url,$data){


    $client  = \Config\Services::curlrequest();
    $mods    = new ModelToken();
    $idToken = "1";
    $token   = $mods->getToken($idToken);
    $tokenPart = explode(".",$token);
    $payload = $tokenPart[1];
    $decode  = base64_decode($payload);
    $json    = json_decode($decode,true);
    $exp     = $json['exp'];
    $currentTime = time();
    if($exp <= $currentTime){
        $url = "http://localhost/Example-Api/public/auth";
        $form_params = [
            'username' => 'Ridwan',
            'email'    => 'Ridwan@gmail.com',
            'password' => '12345'
        ];

        $response = $client->request('POST',$url,['http_errors'=>false,'form_params'=>$form_params]);
        $response = json_decode($response->getBody(),true);
        $token = $response['access_token'];

        $dataToken = [
            'id' => $idToken,
            'token' => $token
        ];
        $mods->save($dataToken);

    }

    $headers = ['Authorization' => 'Bearer ' .$token];
    $response= $client->request($method,$url, [
               'headers'=>$headers,
    'http_errors'=>false,'from_params'=>$data]);
    return $response->getBody();
}