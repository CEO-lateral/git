<?php
class Wallets extends Model{
    public function getName(){	
		if(!empty($_GET)){
			echo ($_GET["id"]);
			echo ($_GET["amount"]);
		}
	}
	
	public function delwallets(){
		if(!empty($_GET['id'])){
			$array1=Model::table("wallets")->delete(array("id" => $_GET["id"]))->send();
		}
	}	
	public function addwallets(){
		if((!empty($_GET['id']) && !empty($_GET['id_user']) && empty($_GET['amount']) && !empty($_GET['image']))){
			$array1=Model::table("wallets")->add(array("id" => $_GET["id"],"id_user" => $_GET["id_user"], "amount" => $_GET["amount"],"image" => $_GET["image"]))->send(); 
		}	
	}
	public function editwallets(){
		if((!empty($_GET['amount']) && !empty($_GET['id']))){
			$array1=Model::table("wallets")->edit(array("amount" => $_GET["amount"]),array("id" => $_GET["id"]))->send();
		}
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
		if(!empty($_GET['id'])){
			$array1=Model::table("wallets_transfers")->delete(array("id" => $_GET["id"]))->send();
		}
	}
	public function editTransfers(){
		if((!empty($_GET['amount']) && !empty($_GET['id']))){
			$array1=Model::table("wallets_transfers")->edit(array("amount" => $_GET["amount"]),array("id" => $_GET["id"]))->send();
		}
	}
	public function pluswallets(){
		if(!empty($_GET['amount'])){
			$array1=Model::table("wallets")->get(array("id","amount"))->filter(array("id" => 1))->send();
			$i=$array1[0]["amount"] + $_GET["amount"];
			echo($i);
			$array2=Model::table("wallets")->edit(array("amount" => $i),array("id" => 1))->send();
		}
	}
	public function minuswallets(){
		if(!empty($_GET['amount'])){
			$array1=Model::table("wallets")->get(array("id","amount"))->filter(array("id" => 1))->send();
			$i=$array1[0]["amount"] - $_GET["amount"];
			echo($i);
			$array2=Model::table("wallets")->edit(array("amount" => $i),array("id" => 1))->send();
		}
	}
	public function requestwallets(){
		$stmt = self::$db->prepare("SELECT * FROM  `wallets`,`wallets_transfers` WHERE wallets.id= :id");
		$result_query = $stmt->execute(array(":id" => self::$params_url['id']));
		$rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 
		$this->viewJSON($rows);				
	}
}		
?>