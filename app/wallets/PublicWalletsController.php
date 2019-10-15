<?php
class PublicWalletsController {
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
	public function viewWallets(){
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
	public function editTransfers(){
		$mywallet6=new Wallets1();
		$mywallet6->editTransfers();
	}
	public function pluswallets(){
		$mywallet7=new Wallets1();
		$mywallet7->pluswallets();
	}
	public function minuswallets(){
		$mywallet8=new Wallets1();
		$mywallet8->minuswallets();
	}
	public function requestwallets(){
		$mywallet9=new Wallets1();
		$mywallet9->requestwallets();
	}
							}

?>