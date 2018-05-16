<?php
require ('./connection/dbconnector.php');

$qry = $conn->prepare("SELECT `name`, `id` FROM `tbl_teams`");
$qry->execute();

$team = $qry->fetchAll();

$team_1 = $_POST['team_1'];
$team_2 = $_POST['team_2'];

$stm = $conn->prepare("INSERT INTO `tbl_matches`(`team_id_a`, `team_id_b`) VALUES ('$team_1', '$team_2')");
$stm->execute(array(":team_id_a" => '$team_1', ":team_id_b" => '$team_2'));