<?php
require_once("../model/Database.php");
class MySql implements Database {

	private $db_host = "localhost";
	private	$db_user = "root";
	private $db_pass = "hoppus123";
	private $db_user_table = "USERS";
	private $db = "hochsicherheit";
	public function connect() {
		$conn = mysql_connect($this->db_host,$this->db_user,$this->db_pass)
		or die("Verbindung zur Datenbank konnte nicht hergestellt werden");
		mysql_select_db($this->db) or die ("Datenbank konnte nicht ausgewählt werden");
	}

	public function login($user,$pass)  {
		$sql = "SELECT username,password FROM ". $this->db_user_table ." WHERE username = '".$user."' AND  password ='".$pass."';";
		$result = mysql_query($sql);
		return mysql_num_rows($result);
	}
}

?>
