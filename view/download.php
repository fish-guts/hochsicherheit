<?php
require_once("../model/mysql.php");
$sql = "SELECT * FROM document WHERE id=:id";
$id = $_GET['fileid'];
$obj = new MySql();
$dbh = $obj->connect();
$sth = $dbh->prepare($sql);
$sth->bindParam(':id', $id, PDO::PARAM_INT);
$sth->execute();
$resultTmp = $sth->fetchAll(PDO::FETCH_ASSOC);
$result = $resultTmp[0];
$type = $result["type"];
$size = $result["size"];
$filename = $result["name"];
$dataT = $result["content"];
header("Content-Type:".$type ."; name=".$filename); 
header("Content-Transfer-Encoding: binary"); 
header("Accept-Ranges: bytes"); 
header("Content-Length: ".$size); 
header('Content-Disposition: attachment; filename='.$filename); 
readfile($filename);
?>
