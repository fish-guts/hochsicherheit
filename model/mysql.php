<?
require_once(ROOT_PATH."/inc/Database.php");
abstract class MySql implements Database {

	$db = "hochsicherheit";
	public function connect($host,$user,$pass) {
		$conn = mysql_connect($host,$user,$pass);
		or die("Verbindung zur Datenbank konnte nicht hergestellt werden");
		mysql_select_db($db) or die ("Datenbank konnte nicht ausgewählt werden"); 		
	}

	protected abstract function login($user,$pass);
}

?>
