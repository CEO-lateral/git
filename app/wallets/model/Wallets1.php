<?php

/*
 * Every class derriving from Model has access to $this->db
 * $this->db is a PDO object
 * Has a config in /core/config/database.php
 */
 
class Wallets1 extends Model{
	
    public function getName(){	
		//$array1=Model::table("wallets")->get(array("id", "id_user","amount","image"))->send();
		//$this->viewJSON($array1);
		 echo ($_GET["id"]);
		 echo ($_GET["amount"]);
}
public function delwallets(){
		$array1=Model::table("wallets")->delete(array("id" => $_GET["id"]))->send();
		//$this->viewJSON($array1);
}	
public function addwallets(){
		$array1=Model::table("wallets")->add(array("id" => $_GET["id"],"id_user" => $_GET["id_user"], "amount" => $_GET["amount"],"image" => $_GET["image"]))->send(); 
}
public function editwallets(){
		$array1=Model::table("wallets")->edit(array("amount" => $_GET["amount"]),array("id" => $_GET["id"]))->send();

}
public function viewWallets(){
		$array1=Model::table("wallets")->get()->sort("id", "asc")->send();
		$this->viewJSON($array1);
}
public function viewTransfers(){
	$array1=Model::table("wallets_transfers")->get()->sort("id", "asc")->send();
		$this->viewJSON($array1);
}
public function delTransfers(){
		$array1=Model::table("wallets_transfers")->delete(array("id" => $_GET["id"]))->send();
		
}
public function editTransfers(){
		$array1=Model::table("wallets_transfers")->edit(array("amount" => $_GET["amount"]),array("id" => $_GET["id"]))->send();

}
public function pluswallets(){
	$array1=Model::table("wallets")->get(array("id"))->sort("id", "asc")->send();
	$array2=$id + $_GET["amount"];
}

}


?>