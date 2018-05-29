<?php
require ('connection/dbconnector.php');
//1st match

$show_match_1 = $conn->prepare("SELECT `team_id_a`, `team_id_b` FROM tbl_matches WHERE id = 1");
$show_match_1->execute();
$show_match_1_F = $show_match_1->fetch(PDO::FETCH_ASSOC);

$team_id_1 = $show_match_1_F['team_id_a'];
$team_id_2 = $show_match_1_F['team_id_b'];

$team_name_1 = $conn->prepare( "SELECT `name` from tbl_teams WHERE id = $team_id_1");
$team_name_2 = $conn->prepare( "SELECT `name` from tbl_teams WHERE id = $team_id_2");
if (isset($team_id_1)) {
    $team_name_1->execute();
    $team_name_2->execute();
    $team_name_1_show = $team_name_1->fetch(PDO::FETCH_ASSOC);
    $team_name_2_show = $team_name_2->fetch(PDO::FETCH_ASSOC);
}

//2nd match

$show_match_2 = $conn->prepare("SELECT `team_id_a`, `team_id_b` FROM tbl_matches WHERE id = 2");
$show_match_2->execute();
$show_match_2_F = $show_match_2->fetch(PDO::FETCH_ASSOC);

$team_id_3 = $show_match_2_F['team_id_a'];
$team_id_4 = $show_match_2_F['team_id_b'];

$team_name_3 = $conn->prepare( "SELECT `name` from tbl_teams WHERE id = $team_id_3");
$team_name_4 = $conn->prepare( "SELECT `name` from tbl_teams WHERE id = $team_id_4");
if (isset($team_id_3)) {
    $team_name_3->execute();
    $team_name_4->execute();
    $team_name_3_show = $team_name_3->fetch(PDO::FETCH_ASSOC);
    $team_name_4_show = $team_name_4->fetch(PDO::FETCH_ASSOC);
}
//3nd match

$show_match_3 = $conn->prepare("SELECT `team_id_a`, `team_id_b` FROM tbl_matches WHERE id = 3");
$show_match_3->execute();
$show_match_3_F = $show_match_3->fetch(PDO::FETCH_ASSOC);

$team_id_5 = $show_match_3_F['team_id_a'];
$team_id_6 = $show_match_3_F['team_id_b'];

$team_name_5 = $conn->prepare( "SELECT `name` from tbl_teams WHERE id = $team_id_5");
$team_name_6 = $conn->prepare( "SELECT `name` from tbl_teams WHERE id = $team_id_6");


if (isset($team_id_5)) {
    $team_name_5->execute();
    $team_name_6->execute();
    $team_name_5_show = $team_name_5->fetch(PDO::FETCH_ASSOC);
    $team_name_6_show = $team_name_6->fetch(PDO::FETCH_ASSOC);
}
//4th match

$show_match_4 = $conn->prepare("SELECT `team_id_a`, `team_id_b` FROM tbl_matches WHERE id = 4");
$show_match_4->execute();
$show_match_4_F = $show_match_4->fetch(PDO::FETCH_ASSOC);

$team_id_7 = $show_match_4_F['team_id_a'];
$team_id_8 = $show_match_4_F['team_id_b'];

$team_name_7 = $conn->prepare( "SELECT `name` from tbl_teams WHERE id = $team_id_7");
$team_name_8 = $conn->prepare( "SELECT `name` from tbl_teams WHERE id = $team_id_8");
if (isset($team_id_7)) {
    $team_name_7->execute();
    $team_name_8->execute();
    $team_name_7_show = $team_name_7->fetch(PDO::FETCH_ASSOC);
    $team_name_8_show = $team_name_8->fetch(PDO::FETCH_ASSOC);
}
//5th match

$show_match_5 = $conn->prepare("SELECT `team_id_a`, `team_id_b` FROM tbl_matches WHERE id = 5");
$show_match_5->execute();
$show_match_5_F = $show_match_5->fetch(PDO::FETCH_ASSOC);

$team_id_9 = $show_match_5_F['team_id_a'];
$team_id_10 = $show_match_5_F['team_id_b'];

$team_name_9 = $conn->prepare( "SELECT `name` from tbl_teams WHERE id = $team_id_9");
$team_name_10 = $conn->prepare( "SELECT `name` from tbl_teams WHERE id = $team_id_10");
if (isset($team_id_9)) {
    $team_name_9->execute();
    $team_name_10->execute();
    $team_name_9_show = $team_name_9->fetch(PDO::FETCH_ASSOC);
    $team_name_10_show = $team_name_10->fetch(PDO::FETCH_ASSOC);
}
//6th match

$show_match_6 = $conn->prepare("SELECT `team_id_a`, `team_id_b`   FROM tbl_matches WHERE id = 6");
$show_match_6->execute();
$show_match_6_F = $show_match_6->fetch(PDO::FETCH_ASSOC);

$team_id_11 = $show_match_6_F['team_id_a'];
$team_id_12 = $show_match_6_F['team_id_b'];

$team_name_11 = $conn->prepare( "SELECT `name` from tbl_teams WHERE id = $team_id_11");
$team_name_12 = $conn->prepare( "SELECT `name` from tbl_teams WHERE id = $team_id_12");
if (isset($team_id_11)) {
    $team_name_11->execute();
    $team_name_12->execute();
    $team_name_11_show = $team_name_12->fetch(PDO::FETCH_ASSOC);
    $team_name_12_show = $team_name_12->fetch(PDO::FETCH_ASSOC);
}
//7th match

$show_match_7 = $conn->prepare("SELECT `team_id_a`, `team_id_b`, `score_team_a`, `score_team_b` FROM tbl_matches WHERE id = 7");
$show_match_7->execute();
$show_match_7_F = $show_match_7->fetch(PDO::FETCH_ASSOC);

$team_id_13 = $show_match_7_F['team_id_a'];
$team_id_14 = $show_match_7_F['team_id_b'];

$team_name_13 = $conn->prepare( "SELECT `name` from tbl_teams WHERE id = $team_id_13");
$team_name_14 = $conn->prepare( "SELECT `name` from tbl_teams WHERE id = $team_id_14");
if (isset($team_id_13)) {
    $team_name_13->execute();
    $team_name_14->execute();
    $team_name_13_show = $team_name_13->fetch(PDO::FETCH_ASSOC);
    $team_name_14_show = $team_name_14->fetch(PDO::FETCH_ASSOC);
}
//SCORE

//1st match score

$show_score_1_qry = $conn->prepare("SELECT `score_team_a`, `score_team_b` from tbl_matches WHERE id = 1");
if (isset($show_score_1_qry)) {
    $show_score_1_qry->execute();
    $show_score_1 = $show_score_1_qry->fetch(PDO::FETCH_ASSOC);
}

//2nd match score

$show_score_2_qry = $conn->prepare("SELECT `score_team_a`, `score_team_b` from tbl_matches WHERE id = 2");
$show_score_2_qry->execute();
$show_score_2= $show_score_2_qry->fetch(PDO::FETCH_ASSOC);

//3rd match score

$show_score_3_qry = $conn->prepare("SELECT `score_team_a`, `score_team_b` from tbl_matches WHERE id = 3");
$show_score_3_qry->execute();
$show_score_3= $show_score_3_qry->fetch(PDO::FETCH_ASSOC);

//4th match score

$show_score_4_qry = $conn->prepare("SELECT `score_team_a`, `score_team_b` from tbl_matches WHERE id = 4");
$show_score_4_qry->execute();
$show_score_4= $show_score_4_qry->fetch(PDO::FETCH_ASSOC);

//5th match score

$show_score_5_qry = $conn->prepare("SELECT `score_team_a`, `score_team_b` from tbl_matches WHERE id = 5");
$show_score_5_qry->execute();
$show_score_5= $show_score_5_qry->fetch(PDO::FETCH_ASSOC);

//6th match score

$show_score_6_qry = $conn->prepare("SELECT `score_team_a`, `score_team_b` from tbl_matches WHERE id = 6");
$show_score_6_qry->execute();
$show_score_6= $show_score_6_qry->fetch(PDO::FETCH_ASSOC);

//7th match score

$show_score_7_qry = $conn->prepare("SELECT `score_team_a`, `score_team_b` from tbl_matches WHERE id = 7");
$show_score_7_qry->execute();
$show_score_7= $show_score_7_qry->fetch(PDO::FETCH_ASSOC);