<?

require_once(ROOT_PATH."/inc/mysql.php");

class MySQLLogin extends MySql {


	function mysql_login() {
		$host = "localhost";
		$mysql_user = "root";
		$mysql_pass = "hoppus123";
		$database = "hochsicherheit";
		super->connect($host,$mysql_user,$mysql_pass)		

	 }

	function login($user,$pass) {
		
	}

}