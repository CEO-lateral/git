<?php

/*
 * Every class derriving from Model has access to $this->db
 * $this->db is a PDO object
 * Has a config in /core/config/database.php
 */

class PublicWalletsController {

	//авторизация пользователя
    public function authorization(){ echo (new Authorization())->startAuth();
 echo "Костя";
getExample();
	}


}

?>