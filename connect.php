<?php
require 'config.php';

try{
	$conn = new PDO("mysql:host=".SERVER.";dbname=".DB, USER, PASSWORD);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "Error: ".$e->getMessage();
}

?>