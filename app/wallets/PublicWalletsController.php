<?php
class PublicWalletsController {
	public function delWallets(){
		$mywallet=new Wallets();
		$mywallet->delWallets();	
	}
	public function addWallets(){
		$mywallet1=new Wallets();
		$mywallet1->addWallets();
	}
	public function editWallets(){
		$mywallet2=new Wallets();
		$mywallet2->editWallets();
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
	public function plusWallets(){
		$mywallet7=new Wallets();
		$mywallet7->plusWallets();
	}
	public function minusWallets(){
		$mywallet8=new Wallets();
		$mywallet8->minusWallets();
	}
	public function requestWallets(){
		$mywallet9=new Wallets();
		$mywallet9->requestWallets();
	}
	public function request1Wallets(){
		$mywallet10=new Wallets();
		$mywallet10->request1Wallets();
	}
    public function sortASC(){
        $mywallet11 = new Wallets();
        $mywallet11 -> sortASC();
    }
    public function sortDESC(){
        $mywallet12 = new Wallets();
        $mywallet12 -> sortDESC();
    }

	
}

?>