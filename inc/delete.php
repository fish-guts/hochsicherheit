<?php
require_once("../model/mysql.php");
$sql = "DELETE FROM document WHERE id=:id";
$id = $_GET['fileid'];
$obj = new MySql();
$dbh = $obj->connect();
$sth = $dbh->prepare($sql);
$sth->bindParam(':id', $id, PDO::PARAM_INT);
$sth->execute();
$resultTmp = $sth->fetchAll(PDO::FETCH_ASSOC);
header("location:../index.php?page=intern&deletesuccess");
?>
