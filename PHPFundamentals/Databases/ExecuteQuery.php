<?php

$dbPassword = "password";
$dbUserName = "root";
$dbServer = "localhost";
$dbPort = "3306";
$dbName = "";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName, $dbPort);

if($connection->connect_errno){
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

//$query = "DELETE FROM Authors WHERE id = 4";
//$query = "UPDATE Authors SET pen_name = 'L. M. Montgomery' WHERE id = 2";
$query = "INSERT INTO Authors (first_name, last_name, pen_name) VALUES ('Arthur Ingatius Conan', 'Doyle', 'Sir Arthur')";

//mixed mysqli::query(string $query [, int $resultMode = MYSQLI_STORE_RESULT])
$connection->query($query);

$connection->close();