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

/*	function getNewsCount(){
		try{
			$sql = "SELECT count(*) FROM msgs";
			$result = $this->_db->querySingle($sql);
			if (!$result) 
				throw new Exception($this->_db->lastErrorMsg());
			return $result;
		}catch(Exception $e){
			throw new SoapFault('getNewsCount', $e->getMessage());
		}
	}

	function getNewsCountByCat($cat_id){
		try{
			$sql = "SELECT count(*) FROM msgs WHERE category=$cat_id";
			$result = $this->_db->querySingle($sql);
			if (!$result) 
				throw new Exception($this->_db->lastErrorMsg());
			return $result;
		}catch(Exception $e){
			throw new SoapFault('getNewsCountByCat', $e->getMessage());
		}
	}*/
}
