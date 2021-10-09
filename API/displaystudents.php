<?php

require 'connect.php';

$statement = $conn->prepare("CALL DisplayStudents()");
$statement->execute();

$response = $statement->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($response);

?>