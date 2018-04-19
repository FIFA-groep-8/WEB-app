<?php
$dbServername = 'mysql:host=localhost;dbname=project_fifa';
$dbUsername = "root";
$dbPassword = "";

try{
    $conn = new PDO($dbServername, $dbUsername, $dbPassword);
} catch (PDOException $exception){
    echo $exception->getMessage();
    exit();
}

