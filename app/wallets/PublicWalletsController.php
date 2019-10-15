<?php
class PublicWalletsController {
	public function delwallets(){
		$mywallet=new Wallets();
		$mywallet->delwallets();	
	}
	public function addwallets(){
		$mywallet1=new Wallets();
		$mywallet1->addwallets();
	}
	public function editwallets(){
		$mywallet2=new Wallets();
		$mywallet2->editwallets();
	}
	public function viewWallets(){
		$mywallet3=new Wallets();
		$mywallet3->viewWallets();
	}
	public function viewTransfers(){
		$mywallet4=new Wallets();
		$mywallet4->viewTransfers();
	}
	public function delTransfers(){
		$mywallet5=new Wallets();
		$mywallet5->delTransfers();	
	}
	public function editTransfers(){
		$mywallet6=new Wallets();
		$mywallet6->editTransfers();
	}
	public function pluswallets(){
		$mywallet7=new Wallets();
		$mywallet7->pluswallets();
	}
	public function minuswallets(){
		$mywallet8=new Wallets();
		$mywallet8->minuswallets();
	}
	public function requestwallets(){
		$mywallet9=new Wallets();
		$mywallet9->requestwallets();
	}
}

?>