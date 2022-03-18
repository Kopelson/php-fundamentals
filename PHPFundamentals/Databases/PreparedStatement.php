<?php
//Prepared Statements helps prevent SQL injection attacks

$dbPassword = "password";
$dbUserName = "root";
$dbServer = "localhost";
$dbPort = "3306";
$dbName = "";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName, $dbPort);

if($connection->connect_errno){
    die("Database Connection Failed. Reason: ".$connection->connect_error);
}

$temFirstName = 'Lucy Maud';

$query = "SELECT first_name, last_name, pen_name FROM Authors WHERE first_name = ?";

$statementObj = $connection->prepare($query);

//mixed mysqli::bind_param(string $types, mixed &$var1[, mixed &$...])

//values are passed by reference therefor must be a variable
$statementObj->bind_param("s", $tempFirstName);//parameters types s => string, d => float, i => integer, b => blob 
$statementObj->execute();

$statementObj->bind_result($firstName, $lastName, $penName);
$statementObj->store_result();

if($statementObj->num_rows > 0){
    while($statementObj->fetch()){
        echo $firstName." ".$lastName." (".$penName.")".PHP_EOL;
    }
}

$statementObj->close();
$connection->close();
