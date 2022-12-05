<?php

$DB_SERVER = "localhost";
$DB_USER = "root";
$DB_PWD = "";
$DB_NAME = "playnchat";

try{
    $conn = new PDO("mysql:host=$DB_SERVER;dbname=$DB_NAME", $DB_USER, $DB_PWD);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Success";
} catch(PDOException $e){
    alert("Failed to connect to the Database. Try again later!");
}


?>