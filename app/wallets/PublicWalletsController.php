<?php

/*
 * Every class derriving from Model has access to $this->db
 * $this->db is a PDO object
 * Has a config in /core/config/database.php
 */

class PublicWalletsController {

	
   /* public function getExample(){
$my_name=new Wallets1();
      $my_name->getName();
	}*/
	public function delwallets(){
	$mywallet=new Wallets1();
	$mywallet->delwallets();	
	}
public function addwallets(){
	$mywallet1=new Wallets1();
	$mywallet1->addwallets();
	}
							}

?>