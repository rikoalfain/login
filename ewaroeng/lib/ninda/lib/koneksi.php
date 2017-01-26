<?php
	$dbname="pos";
	$host="localhost";
	$user="root";
	$pass="";
	try{
		$dbname=new PDO("mysql :host={$host};dbname={$dbname}",$user,$pass);
		$db->setAttribute(PDO : :ATTR_ERRMODE:PDO):ERRMODE_EXCEPTION;
	}catch (PDOException $e){
		die("Connection Error:".%e->getMessage());
	}
?>