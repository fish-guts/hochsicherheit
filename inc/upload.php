<?php
require_once("../model/mysql.php");
print_r($_FILES['userfile']);
if($_FILES['userfile']['size'] > 0) {
	$fileName = $_FILES['userfile']['name'];
	$tmpName  = $_FILES['userfile']['tmp_name'];
	$fileSize = $_FILES['userfile']['size'];
	$fileType = $_FILES['userfile']['type'];
	$category = $_POST['category'];

	$fp      = fopen($tmpName, 'r');
	$content = fread($fp, filesize($tmpName));
	$content = addslashes($content);
	fclose($fp);

	if(!get_magic_quotes_gpc())
	{
	    $fileName = addslashes($fileName);
	}
	$sql = "INSERT INTO document (name, category, type, size, content ) ".
	"VALUES (:filename, :category,:type,:size,:content)";
	$obj = new MySql();
	$dbh = $obj->connect();
	$sth = $dbh->prepare($sql);
	$sth->bindParam(':filename',$fileName, PDO::PARAM_STR);
	$sth->bindParam(':category', $category, PDO::PARAM_INT);
	$sth->bindParam(':size', $fileSize, PDO::PARAM_INT);
	$sth->bindParam(':type', $fileType, PDO::PARAM_STR);
	$sth->bindParam(':content',$content,PDO::PARAM_STR);
	$sth->execute();
	header("location:../index.php?page=intern&uploadsuccess");
	} else {
	header("location:../index.php?page=intern");
}
?>
