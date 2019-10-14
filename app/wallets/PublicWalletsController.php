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
	public function editwallets(){
		$mywallet2=new Wallets1();
		$mywallet2->editwallets();
	}
	public function viewWallets(){s
		$mywallet3=new Wallets1();
		$mywallet3->viewWallets();
	}
	public function viewTransfers(){
		$mywallet4=new Wallets1();
		$mywallet4->viewTransfers();
	}
	public function delTransfers(){
	$mywallet5=new Wallets1();
	$mywallet5->delTransfers();	
	}
							}

?>