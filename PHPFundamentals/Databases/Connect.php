<?php

$dbPassword = "password";
$dbUserName = "root";
$dbServer = "localhost";
$dbPort = "3306";
$dbName = "";

// mysqli::__construct([string $host],[,string $username][,string $password][,string$ dbname][,string $port][,string $socket])

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName, $dbPort);

print_r($connection);

if($connection->connect_errno){
    exit("Database Connection Failed. Reason: ".$connection->connect_error);
}

