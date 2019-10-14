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
public function addwallets(){
if(isset($_GET['id']))
{   
    $link = mysqli_connect($host, $user, $password, $database) 
            or die("Ошибка " . mysqli_error($link)); 
    $id = mysqli_real_escape_string($link, $_GET['id']);
    $query ="DELETE FROM wallets WHERE id = '5'";
 
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
    mysqli_close($link);
}
}
	
	
}





}
?>