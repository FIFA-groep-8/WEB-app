<?php
require ('connection/dbconnector.php');

$qry_team_list = $conn->prepare("SELECT id, name FROM tbl_teams");
$qry_team_list->execute();
$team_list = $qry_team_list->fetchAll();

$qry_player_list = $conn->prepare("SELECT id, first_name, last_name FROM tbl_players");
$qry_player_list->execute();
$player_list = $qry_player_list->fetchAll();


$top_score = $conn->prepare("SELECT MAX(player_score) as top_score FROM tbl_players");
$top_score->execute();
$top_score_show = $top_score->fetch(PDO::FETCH_ASSOC);

$top_scorer = $conn->prepare("SELECT first_name, last_name, player_score, team_id FROM tbl_players ORDER BY player_score DESC LIMIT 1");
$top_scorer->execute();
$top_scorer_show = $top_scorer->fetch(PDO::FETCH_ASSOC);

$team_id = $top_scorer_show ['team_id'];

$top_scorer_team = $conn ->prepare("SELECT name FROM tbl_teams WHERE id = $team_id");
$top_scorer_team->execute();
$top_scorer_team_show = $top_scorer_team->fetch(PDO::FETCH_ASSOC);