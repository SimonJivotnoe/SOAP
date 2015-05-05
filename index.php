<?php
include 'config.php'; //connect config file
include 'Router.php'; //connect Router
date_default_timezone_set('Europe/Kiev');
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
$router = new Router();