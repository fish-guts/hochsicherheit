<?php
	require("../model/mysql.php");

	$username = $_POST["username"];
	$password = $_POST["password"];
	$dbobj = new MySql();
	$conn = $dbobj->connect();
	$count = $dbobj->login($username,$password);
	if($count>0) {
		$_SESSION["validsession"] = "true";
		header("location:../index.php?page=intern");
	} else {
		header("location:../index.php?page=loginpage&loginfailed");
	}

?>
