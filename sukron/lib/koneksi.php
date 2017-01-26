<?php
	$dbname="db_post2";
	$host="127.0.0.1";
	$user="root";
	$pass="";
	try {
		$db=new PDO("mysqli:host={$host};dbname={$dbname}",$user,$pass);
		$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {
		die("connection Error :".$e->getMessage());
	}
?>