<?php

class Router
{

    public function __construct()
    {
        if ( ! empty ($_GET[ 'page' ])) {
            $controllerNameInLowerCase = $_GET[ 'page' ];
        }
        if (isset($controllerNameInLowerCase)) {
            $pageName = $controllerNameInLowerCase;
            $pagePass = realpath(__DIR__) . '/controllers/' . $pageName . '.php';
            if (file_exists($pagePass)) {
                new $pageName;
            } else {
                new HomeCtrl();
            }
        } else {
            new HomeCtrl();
         }

    }

}