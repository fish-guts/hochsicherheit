<?php
require_once("../model/mysql.php");


if($_FILES['userfile']['size'] > 0) {
	$file = $_FILES['userfile'];
	$tmpName  = $file['tmp_name'];
	$category = $_POST['category'];
	$fp      = fopen($tmpName, 'r');
	$content = fread($fp, filesize($tmpName));
	$content = addslashes($content);
	fclose($fp);
	$mysql = new MySql();
	$mysql->add_document($file,$category,$content);
	header("location:../index.php?page=intern&uploadsuccess=true");
	} else {
	header("location:../index.php?page=intern");
}
?>
