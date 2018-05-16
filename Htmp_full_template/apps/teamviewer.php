<?php
require ('../connection/dbconnector.php');

$qry = $conn->prepare("SELECT `name`, `id` FROM `tbl_teams`");
$qry->execute();

$team = $qry->fetchAll();

$team_1 = $_POST['team_1'];
$team_2 = $_POST['team_2'];
$team_3 = $_POST['team_3'];
$team_4 = $_POST['team_4'];
$team_5 = $_POST['team_5'];
$team_6 = $_POST['team_6'];
$team_7 = $_POST['team_7'];
$team_8 = $_POST['team_8'];

//$id = "15";
//
//$Test = $conn->prepare("UPDATE `tbl_matches` SET `score_team_a`= 100,`score_team_b`= 9 WHERE `id` = $id");
//$Test->execute(array(':id' => '$id'));

$select = $conn->prepare("SELECT COUNT(*) as total from `tbl_teams`");
$select->execute();

$stm = $conn->prepare("INSERT INTO `tbl_matches`(`team_id_a`, `team_id_b`) VALUES ('$team_1', '$team_2')");
$stm->execute(array(":team_id_a" => '$team_1', ":team_id_b" => '$team_2'));

$stm = $conn->prepare("INSERT INTO `tbl_matches`(`team_id_a`, `team_id_b`) VALUES ('$team_3', '$team_4')");
$stm->execute(array(":team_id_a" => '$team_1', ":team_id_b" => '$team_2'));

$stm = $conn->prepare("INSERT INTO `tbl_matches`(`team_id_a`, `team_id_b`) VALUES ('$team_5', '$team_6')");
$stm->execute(array(":team_id_a" => '$team_1', ":team_id_b" => '$team_2'));

$stm = $conn->prepare("INSERT INTO `tbl_matches`(`team_id_a`, `team_id_b`) VALUES ('$team_7', '$team_8')");
$stm->execute(array(":team_id_a" => '$team_1', ":team_id_b" => '$team_2'));