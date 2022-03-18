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

$query = "INSERT INTO Authors (first_name, last_name, pen_name) VALUES ('John Ronald Reuel', 'Tolkien', 'J. R. R. Tolkien')";

$connection->query($query);

echo "Newly Created Author Id: ".$connection->insert_id;

$connection->close();