<?php


class View
{
    public function __construct()
    {

    }

    public function startPage(){
        echo file_get_contents(TEMPLATES);
    }

    public function printRes($res){
        echo json_encode($res);
    }
} 