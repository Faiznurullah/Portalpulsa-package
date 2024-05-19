<?php 

namespace Faiznurullah\Portal;

use GuzzleHttp\Client;

class Portalpulsa
{

    private $portalkey;
    private $secretkey;
    private $userid;
    private $header;
    private $url;
    public function __construct($portalkey = null, $secretkey = null, $userid = null)
    {
        $this->portalkey = $portalkey ?? env('PORTAL_KEY'); 
        $this->secretkey = $secretkey ?? env('SECRET_KEY'); 
        $this->userid = $userid ?? env('PORTAL_USER_ID'); 
        $this->url = 'https://portalpulsa.com/api/connect/';
        $this->header = [
            'Content-Type' => 'application/json',
            'portal-userid' => $this->userid,
            'portal-secretkey' => $this->secretkey,
            'portal-secret' => $this->portalkey
            ];
    }
      
    public function Saldo(){
        $data = ['inquiry' => 'S'];
        $client = new Client();
        $response = $client->request('POST', $this->url, [
            'headers' => $this->header,
            'json' => $data,
        ]); 

        return $response;
    }

    public function Connect($data){ 
        $client = new Client();
        $response = $client->request('POST', $this->url, [
            'headers' => $this->header,
            'json' => $data,
        ]); 

        return $response;
    }

     
}