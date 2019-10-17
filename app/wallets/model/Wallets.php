<?php
class Wallets extends Model{
    public function getName(){	
		if(!empty($_GET)){
			echo ($_GET["id"]);
			echo ($_GET["amount"]);
		}
	}
	public function delWallets(){
		if(!empty($_GET['id'])){
			$array1=Model::table("wallets")->delete(array("id" => $_GET["id"]))->send();
		}
			if(empty($_GET['id'])){
				echo('Ошибка');
			}
		
	}	
	public function addWallets(){
		if(!empty($_GET['id_user']) && empty($_GET['amount']) && !empty($_GET['image'])){
			//$array1=Model::table("wallets")->add(array("id_user" => $_GET["id_user"], "amount" => $_GET["amount"],"image" => $_GET["image"]))->send(); 
			$array1=Model::table("wallets")->get(array("id"))->filter(array("id" =>9))->send();
			$this->viewJSON($array1);
			var_dump($array[0]["id"]);
				if(empty($array[0]["id"])){
					echo("Loh");
				}
			
		}	
					if((empty($_GET['id_user'])) || (empty($_GET['image']))){
						echo('Ошибка');
					}
	}
	public function editWallets(){
		if((!empty($_GET['amount'])) && (!empty($_GET['id']))){
			$array1=Model::table("wallets")->edit(array("amount" => $_GET["amount"]),array("id" => $_GET["id"]))->send();
		}
			if((empty($_GET['amount'])) || (empty($_GET['id']))){
				echo('Ошибка');
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
			else{
				echo('Ошибка');
			}
	}
	public function editTransfers(){
		if((!empty($_GET['id'])) && ((!empty($_GET['amount'])) || (!empty($_GET['status'])) || (!empty($_GET['comments'])) || (!empty($_GET['timestamp'])))){
			$array1=Model::table("wallets_transfers")->edit(array("amount" => $_GET["amount"]),array("id" => $_GET["id"]),array("status" => $_GET["status"]),array("comments" => $_GET["comments"]),array("timestamp" => $_GET["timestamp"]))->send();
		}
			else{
				echo('Ошибка');
			}
	}
	public function plusWallets(){
		if((!empty($_GET['amount'])) && (!empty($_GET['id']))){
			$array1=Model::table("wallets")->get(array("id","amount"))->filter(array("id" => $_GET['id']))->send();
		//пополнение кошелька	$i=$array1[0]["amount"] + $_GET["amount"];
			echo($i);
			$array2=Model::table("wallets")->edit(array("amount" => $i),array("id" => $_GET['id']))->send();
		}
			else{
				echo('Ошибка');
			}
	}
	public function minusWallets(){
		if((!empty($_GET['amount'])) && (!empty($_GET['id'])) && ($_GET['amount']>0)){
			$array1=Model::table("wallets")->get(array("id","amount"))->filter(array("id" => $_GET['id']))->send();
			$i=$array1[0]["amount"] - $_GET["amount"];
			if($i>=0){
			echo($i);
			$array2=Model::table("wallets")->edit(array("amount" => $i),array("id" => $_GET['id']))->send();
			}
			else{
				echo('Ошибка');	
			}
		}
			else{
				echo('Ошибка');
			}
	}
	public function requestWallets(){
		if(!empty($_GET['id'])){
			$stmt = self::$db->prepare("SELECT * FROM  `wallets`,`wallets_transfers` WHERE wallets.id= :id");
			$result_query = $stmt->execute(array(":id" => self::$params_url['id']));
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC); 
			$this->viewJSON($rows);			
		}
		else{
			echo('Ошибка');
		}				
	}	
	public function request1Wallets(){
		if((!empty($_GET['id_owner'])) && (!empty($_GET['id_wallet'])) && (!empty($_GET['rights']))){
			$stmt = self::$db->prepare(" INSERT INTO wallets_owners (id_owner,id_wallet,rights) VALUES (5,5,'non-active')");
			$result_query = $stmt->execute(array(":id_owner" => self::$params_url['id_owner'],":id_wallet" => self::$params_url['id_wallet'],":rights" => self::$params_url['rights'])); 
		}
		else{
			echo('Ошибка');
		}		
	}
}	
?>