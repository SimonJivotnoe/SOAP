<?php
include 'config.php';
function __autoload($class)
{
    $directories = array(
        '/controllers/',
        '/models/',
        '/view/'
    );
    foreach($directories as $directory)
    {
        if(file_exists(dirname(__FILE__).$directory.$class.'.php'))
        {
            require_once(dirname(__FILE__).$directory.$class.'.php');
            return;
        }
    }
}
ini_set('soap.wsdl_cache_enabled', '0');
$server = new SoapServer("autos.wsdl");
$server->setClass("AutoService");
$server->handle();  