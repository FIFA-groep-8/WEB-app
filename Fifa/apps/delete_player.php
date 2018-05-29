<?php

require ('../connection/dbconnector.php');

$delete_score = $_POST['player_delete'];

$delete_p1 = $conn->prepare("UPDATE `tbl_players` SET `player_score` = player_score -1 WHERE `id` = $delete_score");

$delete_p1->execute();

header('location: ../poulestands.php');
