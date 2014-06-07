<?php

interface Database {

	public function connect();
	public function login($user,$pass);
}


?>
