<?php
require 'connect.php';

$studentID = $_POST['studentID'];
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$address = $_POST['address'];

$statement = $conn->prepare("Call UpdateStudent(?,?,?,?,?,?)");

$statement->bindParam(1, $studentID, PDO::PARAM_INT);
$statement->bindParam(2, $firstname, PDO::PARAM_STR);
$statement->bindParam(3, $middlename, PDO::PARAM_STR);
$statement->bindParam(4, $lastname, PDO::PARAM_STR);
$statement->bindParam(5, $age, PDO::PARAM_INT);
$statement->bindParam(6, $address, PDO::PARAM_STR);

if(($statement->execute()) == 1)
{
	echo 'success';
}

$conn = null;
?>