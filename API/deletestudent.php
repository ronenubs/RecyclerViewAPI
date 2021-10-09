<?php

require 'connect.php';

$id = $_POST['studentID'];

$statement = $conn->prepare("CALL DeleteStudent(?);");

$statement->bindParam(1, $id, PDO::PARAM_INT);

if(($statement->execute()) == 1)
{
	echo 'success';
}

$conn = null;

?>