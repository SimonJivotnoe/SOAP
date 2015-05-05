<?php


class Client
{
    private $client;

    public function __construct()
    {
        ini_set('soap.wsdl_cache_enabled', '0');
        $this->client = new SoapClient("http://192.168.0.15/~user1/PHP/SOAP/SOAP/server/Server.php?WSDL");
    }

    public function listOfAuto(){
        $res = $this->client->getListAuto();
        return $res;
    }
    
    public function details($id){
        $res = $this->client->details($id);
        return $res;
    }
} 
