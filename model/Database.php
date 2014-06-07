<?php

interface Database {

	public function connect();
	public function login($dbh,$user,$pass);
}


?>
