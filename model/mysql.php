<?php
require_once("Database.php");
class MySql implements Database {

	private $db_host = "localhost";
	private	$db_user = "root";
	private $db_pass = "hoppus123";
	private $db_user_table = "USERS";
	private $db_document_table = "document";
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
	// getters and setters
	public function set_db_host($host) {
		$this->host = $host;
	}
	public function set_db_user($user) {
		$this->user = $user;
	}
	public function set_db_pass($pass) {
		$this->db_pass = $pass;
	}	
	public function set_db($db) {
		$this->db = $db;
	}
	public function get_db_host() {
		return $this->host;
	}
	public function get_db_user() {
		return $this->user;
	}
	public function get_db_pass() {
		return $this->db_pass;
	}	
	public function get_db() {
		return $this->db;
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

	public function add_user($user,$pass) {
	
		$sql = "INSERT INTO USERS (username,password) VALUES(:u, :p)";
		printf("%s\n",$sql);
		$dbh = $this->connect();
		$sth = $dbh->prepare($sql);
		$sth->bindParam(':u', $user, PDO::PARAM_STR);
		$sth->bindParam(':p', $pass, PDO::PARAM_STR);
		$sth->execute();
	}
	
	public function add_document($file,$category,$content) {
	
		$fileName = $file['name'];
		$tmpName  = $file['tmp_name'];
		$fileSize = $file['size'];
		$fileType = $file['type'];
	
		if(!get_magic_quotes_gpc())
		{
		    $fileName = addslashes($fileName);
		}
		$sql = "INSERT INTO document (name, category, type, size, content ) ".
		"VALUES (:filename, :category,:type,:size,:content)";
		$dbh = $this->connect();
		$sth = $dbh->prepare($sql);
		$sth->bindParam(':filename',$fileName, PDO::PARAM_STR);
		$sth->bindParam(':category', $category, PDO::PARAM_INT);
		$sth->bindParam(':size', $fileSize, PDO::PARAM_INT);
		$sth->bindParam(':type', $fileType, PDO::PARAM_STR);
		$sth->bindParam(':content',$content,PDO::PARAM_STR);
		$sth->execute();
	}	
}

?>
