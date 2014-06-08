<?php
require_once("mysql.php");
		$id = $_GET['fileid'];
		FileModel::delete_document($id);
		header("location:../index.php?page=intern&deletesuccess");	
?>
