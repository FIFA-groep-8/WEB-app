<?php
//$dbServername = 'mysql:host=localhost;dbname=project_fifa';
$dbServername = 'mysql:host=localhost;dbname=project_fifa';
$dbUsername = "root";
$dbPasword = "";

try{
    $conn = new PDO($dbServername, $dbUsername, $dbPasword);
} catch (PDOException $exception){
    echo $exception->getMessage();
    exit();
}