<?php

require ('../connection/dbconnector.php');


$team_list_1 = $_POST['team_list_1'];
$team_list_2 = $_POST['team_list_2'];
$team_a_score = $_POST['team_a_score'];
$team_b_score = $_POST['team_b_score'];


$input_result_query = $conn->prepare("UPDATE `tbl_matches` SET `score_team_a` = $team_a_score, `score_team_b` = $team_b_score WHERE team_id_a = $team_list_1 AND team_id_b = $team_list_2");

$input_result_query->execute();



header('location: ../results.php');
