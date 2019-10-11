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
}}
?>