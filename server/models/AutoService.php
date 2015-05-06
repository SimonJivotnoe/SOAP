<?php

class AutoService{

	function getListAuto(){
		try{
            $pdo = PDOModel::connect();
            $res = $pdo ->select("id, brand, model")
                ->from("autos")
                ->exec();
            if (!empty($res)) {
                return $res;
            }
		}catch(Exception $e){
			throw new SoapFault('something wrong', $e->getMessage());
		}
	}

    function getDetails($id){
        try{
            $pdo = PDOModel::connect();
            $res = $pdo ->select("id, brand, model, year, capacity, color, max_speed, price")
                ->from("autos")
                ->where("id = '$id'")
                ->exec();
            if (!empty($res)) {
                return $res;
            }
        }catch(Exception $e){
            throw new SoapFault('something wrong', $e->getMessage());
        }
    }

    function getSearch($resArr){
        $searchInput = $resArr[0];
        $searchOption = $resArr[1];
        try{
            $pdo = PDOModel::connect();
            $res = $pdo ->select("id, brand, model, year, capacity, color, max_speed, price")
                ->from("autos")
                ->where("$searchOption = '$searchInput'")
                ->exec();
            if (!empty($res)) {
                return $res;
            }
        }catch(Exception $e){
            throw new SoapFault('something wrong', $e->getMessage());
        }
    }

    function order($resArr){
        $name = $resArr[0];
        $surname = $resArr[1];
        $payment = $resArr[2];
        $id = $resArr[3];
        try{
            $pdo = PDOModel::connect();
            $res = $pdo->insert("orders")
                ->fields("name, surname, payment, car_id")
                ->values("'$name', '$surname', '$payment', $id")
                ->execInsertWithLastID();
            if (!empty($res)) {
                return $res;
            }
        }catch(Exception $e){
            throw new SoapFault('something wrong', $e->getMessage());
        }
    }
}
