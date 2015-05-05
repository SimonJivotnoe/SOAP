<?php

class HomeCtrl
{
    /**
     *
     */
    public function __construct()
    {
        $objView = new View();
       if (isset($_GET['action'])) {
           $action = $_GET['action'];
           $obj = new Client();
           if ('all' == $_GET['action']) {
           $res = $obj->listOfAuto();
           } else {

           }

           $objView->printRes($res);
       } else {
           $objView->startPage();
       }
    }
}