<?php
	ini_set('display_errors', 1);
	error_reporting(~0);
	require("../model/mysql.php");

	$username = $_POST["username"];
	$password = md5($_POST["password"]);
	
	$dbobj = new MySql();
	$conn = $dbobj->connect();
	echo "haha";

	$session = $dbobj->login($username,$password);
	if($session==0) {
		session_regiser("validsession");
		header("location:../index.php?page=intern");
	} else {
		header("location:../index.php?page=loginpage&loginfailed");
	}
?>
