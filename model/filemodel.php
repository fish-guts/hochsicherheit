<?php

require_once("mysql.php");

class FileModel extends MySql {

	function get_files($type) {
		$obj = new MySql();
		$dbh = $obj->connect();
		$sql =  "SELECT document.id,document.name,size FROM document ".
			"LEFT JOIN category on document.category = category.id ".
			"WHERE category.name = :category";

		$sth = $dbh->prepare($sql);
		$sth->bindParam(':category', $type, PDO::PARAM_STR);
		$sth->execute();
		$result = $sth->fetchAll(PDO::FETCH_ASSOC);
		

		return $result;
 	}
	static function delete_document($id) {
		$sql = "DELETE FROM document WHERE id=:id";
		$id = $_GET['fileid'];
		$obj = new MySql();
		$dbh = $obj->connect();
		$sth = $dbh->prepare($sql);
		$sth->bindParam(':id', $id, PDO::PARAM_INT);
		$sth->execute();
		$resultTmp = $sth->fetchAll(PDO::FETCH_ASSOC);
		header("location:../index.php?page=intern&deletesuccess");	
	}
	
}
