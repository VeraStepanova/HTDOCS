<?php

$server = "localhost";
$dbName = "contactsdb";
$dbUser = "root";
$dbPass = "root";
$dbDSN = "mysql:host=$server; dbname=$dbName;charset=UTF8"; //data sourse name - DSN

try{

$conn = new PDO($dbDSN, $dbUser, $dbPass);
 // Set the PDO error mode to exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


} 
catch(PDOException $e){

    echo "<p>Connection failed: " . $e->getMessage() . "</p>";
    exit(1);

}



