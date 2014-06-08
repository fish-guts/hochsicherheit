<?php

require_once("../model/mysql.php");

class MySqlTest extends PHPUnit_Framework_TestCase {

	private $db_host;
	private $db_user;
	private $db_pass;
	private $db_table_user;
	private $db_table_document;


	public function setup() {
		$this->db_host = "localhost";
		$this->db_user = "root";
		$this->db_pass = "hoppus123";
		$this->db = "hochsicherheit";
		$this->db_table_user = "USERS";
		$this->db_table_document = "document";
	
	}
	public function teardown() {}
	

	public function testConnection() {
		$mysql = new MySql();	
		$this->assertTrue($mysql->connect() !== null);
	}

	public function testLogin() {
		$this->setup();
		$mysql = new MySql();
		$dbh = $mysql->connect();
		$this->assertTrue($mysql->login($dbh,$this->db_user,$this->db_pass) !== null);
	}
	public function testAddUser() {
		$user = "testuser";
		$pass = "testpass";
		$this->setup();
		$mysql = new MySql();
		$dbh = $mysql->connect();
		$mysql->add_user($user,$pass);
		$this->assertGreaterThan(0,$mysql->login($dbh,$user,$pass)); 
	}
}
