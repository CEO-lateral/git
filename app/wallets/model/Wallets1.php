<?php

/*
 * Every class derriving from Model has access to $this->db
 * $this->db is a PDO object
 * Has a config in /core/config/database.php
 */

class Wallets1 extends Model{

	//авторизация пользователя
    public function getName(){	
	$array = array("My", "name", "is", "Kostya");
var_dump($array);
		$this->viewJSON($array);
		
		
		
		
		
	}



}

?>