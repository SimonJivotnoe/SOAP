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
            if ('all' == $action) {
                $res = $obj->listOfAuto();
            } else if('details' == $action){
                $id = $_GET['id'];
                $res = $obj->details($id);
            } else if('search' == $action){
                $searchInput = $_GET['searchInput'];
                $searchOption = $_GET['searchOption'];
                $res = $obj->search($searchInput, $searchOption);
            } else if('order' == $action){
                $name = $_GET['name'];
                $surname = $_GET['surname'];
                $payment = $_GET['payment'];
                $id = $_GET['id'];
                $res = $obj->order($name, $surname, $payment, $id);
            }
            $objView->printRes($res);
        } else {
            $objView->startPage();
        }
    }
}
