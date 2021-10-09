<?php

require 'connect.php';

$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$address = $_POST['address'];

//PREPARE CALLING PROCEDURE
$statement = $conn->prepare("CALL InsertStudent(?,?,?,?,?)");

$statement->bindParam(1, $firstname, PDO::PARAM_STR);
$statement->bindParam(2, $middlename, PDO::PARAM_STR);
$statement->bindParam(3, $lastname, PDO::PARAM_STR);
$statement->bindParam(4, $age, PDO::PARAM_INT);
$statement->bindParam(5, $address, PDO::PARAM_STR);

if(($statement->execute()) == 1){
	echo 'success';
}

$conn = null;

?>