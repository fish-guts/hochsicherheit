<?php
require_once("Database.php");
class MySql implements Database {

	private $db_host = "localhost";
	private	$db_user = "root";
	private $db_pass = "hoppus123";
	private $db_user_table = "USERS";
	private $db = "hochsicherheit";
	public function connect() {

		try {
			$hoststr = "mysql:host=".$this->db_host.";dbname=".$this->db;
			return new PDO($hoststr, $this->db_user, $this->db_pass);
 
		}	
		catch(PDOException $e) {
			echo $e->getMessage();
		}	
	}

	public function login($dbh,$user,$pass)  {
		$count = 0;
		$sql = "SELECT username,password FROM ". $this->db_user_table ." WHERE username = '".$user."' AND  password ='".$pass."';";
		$STH = $dbh->query($sql);
 
		# setting the fetch mode
		$STH->setFetchMode(PDO::FETCH_ASSOC);
 
		while($row = $STH->fetch()) {	
			$count++;	
		}		
		return $count;
	}
}

?>
