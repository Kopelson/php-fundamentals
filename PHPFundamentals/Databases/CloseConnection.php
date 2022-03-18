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

$connection->close();