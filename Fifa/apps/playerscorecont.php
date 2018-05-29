<?php

require ('../connection/dbconnector.php');

$p_score_1= $_POST['p_score_1'];
$p_score_2 = $_POST['p_score_2'];

if (isset($p_score_1))
{
    $p_score_1= $_POST['p_score_1'];
    $p_score_2 = $_POST['p_score_2'];
    $p_score_query_1 = $conn->prepare( "UPDATE `tbl_players` SET `player_score` = player_score +1 WHERE `id` = $p_score_1");
    $p_score_query_1->execute();


    $p_score_query_2 = $conn->prepare("UPDATE `tbl_players` SET `player_score` = player_score +1 WHERE `id` = $p_score_2");
    $p_score_query_2->execute();
    header("Location: ../poulestands.php?player_id=$p_score_1&player_id_2=$p_score_2");

}



else
    {
        header('location: ../poulestands.php');


    }
