<?php
 session_start();
error_reporting(E_ERROR|E_PARSE);

require ('connection/dbconnector.php');

$admin =  $_SESSION["admin"];
if($admin == '1'){
    $qry = $conn->prepare("SELECT `name`, `id` FROM `tbl_teams`");
    $qry->execute();

    $team = $qry->fetchAll();
    if (isset($_POST['submit'])){


        $team_name_1 = $_POST['team_name_1'];
        $team_name_2 = $_POST['team_name_2'];
        $team_name_3 = $_POST['team_name_3'];
        $team_name_4 = $_POST['team_name_4'];
        $team_name_5 = $_POST['team_name_5'];
        $team_name_6 = $_POST['team_name_6'];
        $team_name_7 = $_POST['team_name_7'];
        $team_name_8 = $_POST['team_name_8'];

        $select = $conn->prepare("SELECT COUNT(*) as total from `tbl_teams`");
        $select->execute();

        $create_teams = $conn->prepare("UPDATE `tbl_matches` SET `team_id_a`= '$team_name_1' ,`team_id_b`= '$team_name_2' WHERE `id` = 1");
        $create_teams->execute(array(":team_id_a" => '$team_name_1', ":team_id_b" => '$team_name_2'));

        $create_teams = $conn->prepare("UPDATE `tbl_matches` SET `team_id_a`= '$team_name_3' ,`team_id_b`= '$team_name_4' WHERE `id` = 2  ");
        $create_teams->execute(array(":team_id_a" => '$team_name_3', ":team_id_b" => '$team_name_4'));

        $create_teams = $conn->prepare("UPDATE `tbl_matches` SET `team_id_a`= '$team_name_5' ,`team_id_b`= '$team_name_6' WHERE `id` = 3  ");
        $create_teams->execute(array(":team_id_a" => '$team_name_5', ":team_id_b" => '$team_name_6'));

        $create_teams = $conn->prepare("UPDATE `tbl_matches` SET `team_id_a`= '$team_name_7' ,`team_id_b`= '$team_name_8' WHERE `id` = 4  ");
        $create_teams->execute(array(":team_id_a" => '$team_name_7', ":team_id_b" => '$team_name_8'));
    }




} else{
    $team_a_match_1 = $conn->prepare("SELECT team_id_a FROM tbl_matches WHERE id = '1'");
    $team_a_match_1->execute();
    $team_a_match_1 = $team_a_match_1->fetchAll(PDO::FETCH_COLUMN);
    $team_a_match_1 = implode("", $team_a_match_1);

    $team_name_a_match_1 = $conn->prepare("SELECT name FROM tbl_teams WHERE id = '$team_a_match_1'");
    $team_name_a_match_1->execute();
    $team_name_a_match_1 = $team_name_a_match_1->fetchAll(PDO::FETCH_COLUMN);

    $team_name_a_match_1 = implode("", $team_name_a_match_1);

    //
    $team_b_match_1 = $conn->prepare("SELECT team_id_b FROM tbl_matches WHERE id = '1'");
    $team_b_match_1->execute();
    $team_b_match_1 = $team_b_match_1->fetchAll(PDO::FETCH_COLUMN);
    $team_b_match_1 = implode("", $team_b_match_1);

    $team_name_b_match_1 = $conn->prepare("SELECT name FROM tbl_teams WHERE id = '$team_b_match_1'");
    $team_name_b_match_1->execute();
    $team_name_b_match_1 = $team_name_b_match_1->fetchAll(PDO::FETCH_COLUMN);

    $team_name_b_match_1 = implode("", $team_name_b_match_1);
//
    $team_a_match_2 = $conn->prepare("SELECT team_id_a FROM tbl_matches WHERE id = '2'");
    $team_a_match_2->execute();
    $team_a_match_2 = $team_a_match_2->fetchAll(PDO::FETCH_COLUMN);
    $team_a_match_2 = implode("", $team_a_match_2);

    $team_name_a_match_2 = $conn->prepare("SELECT name FROM tbl_teams WHERE id = '$team_a_match_2'");
    $team_name_a_match_2->execute();
    $team_name_a_match_2 = $team_name_a_match_2->fetchAll(PDO::FETCH_COLUMN);

    $team_name_a_match_2 = implode("", $team_name_a_match_2);

    //
    $team_b_match_2 = $conn->prepare("SELECT team_id_b FROM tbl_matches WHERE id = '2'");
    $team_b_match_2->execute();
    $team_b_match_2 = $team_b_match_2->fetchAll(PDO::FETCH_COLUMN);
    $team_b_match_2 = implode("", $team_b_match_2);

    $team_name_b_match_2 = $conn->prepare("SELECT name FROM tbl_teams WHERE id = '$team_b_match_2'");
    $team_name_b_match_2->execute();
    $team_name_b_match_2 = $team_name_b_match_2->fetchAll(PDO::FETCH_COLUMN);

    $team_name_b_match_2 = implode("", $team_name_b_match_2);
//
    $team_a_match_3 = $conn->prepare("SELECT team_id_a FROM tbl_matches WHERE id = '3'");
    $team_a_match_3->execute();
    $team_a_match_3 = $team_a_match_3->fetchAll(PDO::FETCH_COLUMN);
    $team_a_match_3 = implode("", $team_a_match_3);

    $team_name_a_match_3 = $conn->prepare("SELECT name FROM tbl_teams WHERE id = '$team_a_match_3'");
    $team_name_a_match_3->execute();
    $team_name_a_match_3 = $team_name_a_match_3->fetchAll(PDO::FETCH_COLUMN);

    $team_name_a_match_3 = implode("", $team_name_a_match_3);

    //
    $team_b_match_3 = $conn->prepare("SELECT team_id_b FROM tbl_matches WHERE id = '3'");
    $team_b_match_3->execute();
    $team_b_match_3 = $team_b_match_3->fetchAll(PDO::FETCH_COLUMN);
    $team_b_match_3 = implode("", $team_b_match_3);

    $team_name_b_match_3 = $conn->prepare("SELECT name FROM tbl_teams WHERE id = '$team_b_match_3'");
    $team_name_b_match_3->execute();
    $team_name_b_match_3 = $team_name_b_match_3->fetchAll(PDO::FETCH_COLUMN);

    $team_name_b_match_3 = implode("", $team_name_b_match_3);
//
    $team_a_match_4 = $conn->prepare("SELECT team_id_a FROM tbl_matches WHERE id = '4'");
    $team_a_match_4->execute();
    $team_a_match_4 = $team_a_match_4->fetchAll(PDO::FETCH_COLUMN);
    $team_a_match_4 = implode("", $team_a_match_4);

    $team_name_a_match_4 = $conn->prepare("SELECT name FROM tbl_teams WHERE id = '$team_a_match_4'");
    $team_name_a_match_4->execute();
    $team_name_a_match_4 = $team_name_a_match_4->fetchAll(PDO::FETCH_COLUMN);

    $team_name_a_match_4 = implode("", $team_name_a_match_4);

    //
    $team_b_match_4 = $conn->prepare("SELECT team_id_b FROM tbl_matches WHERE id = '4'");
    $team_b_match_4->execute();
    $team_b_match_4 = $team_b_match_4->fetchAll(PDO::FETCH_COLUMN);
    $team_b_match_4 = implode("", $team_b_match_4);

    $team_name_b_match_4 = $conn->prepare("SELECT name FROM tbl_teams WHERE id = '$team_b_match_4'");
    $team_name_b_match_4->execute();
    $team_name_b_match_4 = $team_name_b_match_4->fetchAll(PDO::FETCH_COLUMN);

    $team_name_b_match_4 = implode("", $team_name_b_match_4);

    //
    $score_qry_1_a = $conn->prepare("SELECT `score_team_a` FROM `tbl_matches` WHERE `id` = '1'");
    $score_qry_1_a->execute();
    $score_id_1_a = $score_qry_1_a->fetchAll(PDO::FETCH_COLUMN);
    $score_id_1_a = implode("", $score_id_1_a);


    $score_qry_1_b = $conn->prepare("SELECT `score_team_b` FROM `tbl_matches` WHERE `id` = '1'");
    $score_qry_1_b->execute();
    $score_id_1_b = $score_qry_1_b->fetchAll(PDO::FETCH_COLUMN);
    $score_id_1_b = implode("", $score_id_1_b);


    if ($score_id_1_a > $score_id_1_b) {
        $winner_match_1 = $team_name_a_match_1;
        $advance_match_1_a = $conn->prepare("UPDATE `tbl_matches` SET `team_id_a`= '$team_a_match_1'  WHERE `id` = 5");
        $advance_match_1_a->execute(array(":team_id_a" => '$team_name_a_match_1'));
    } elseif ($score_id_1_b > $score_id_1_a) {
        $winner_match_1 = $team_name_b_match_1;
        $advance_match_1_b = $conn->prepare("UPDATE `tbl_matches` SET `team_id_a`= '$team_a_match_1' WHERE `id` = 5");
        $advance_match_1_b->execute(array(":team_id_a" => '$team_name_b_match_1'));
    }


    //
    $score_qry_2_a = $conn->prepare("SELECT `score_team_a` FROM `tbl_matches` WHERE `id` = '2'");
    $score_qry_2_a->execute();
    $score_id_2_a = $score_qry_2_a->fetchAll(PDO::FETCH_COLUMN);
    $score_id_2_a  = implode("", $score_id_2_a);

    $score_qry_2_b = $conn->prepare("SELECT `score_team_b` FROM `tbl_matches` WHERE `id` = '2'");
    $score_qry_2_b->execute();
    $score_id_2_b = $score_qry_2_b->fetchAll(PDO::FETCH_COLUMN);
    $score_id_2_b = implode("", $score_id_2_b);


    if ($score_id_2_a > $score_id_2_b){
        $winner_match_2 = $team_name_a_match_2;
        $advance_match_2_a = $conn->prepare("UPDATE `tbl_matches` SET `team_id_b`= '$team_a_match_2'  WHERE `id` = 5");
        $advance_match_2_a->execute(array(":team_id_b" => '$team_name_a_match_2'));
    } elseif($score_id_2_b > $score_id_2_a){
        $winner_match_2 = $team_name_b_match_2;
        $advance_match_2_b = $conn->prepare("UPDATE `tbl_matches` SET `team_id_b`= '$team_b_match_2'  WHERE `id` = 5");
        $advance_match_2_b->execute(array(":team_id_b" => '$team_name_b_match_2'));
    }

    //
    $score_qry_3_a = $conn->prepare("SELECT `score_team_a` FROM `tbl_matches` WHERE `id` = '3'");
    $score_qry_3_a->execute();
    $score_id_3_a   = $score_qry_3_a->fetchAll(PDO::FETCH_COLUMN);
    $score_id_3_a = implode("", $score_id_3_a);

    $score_qry_3_b = $conn->prepare("SELECT `score_team_b` FROM `tbl_matches` WHERE `id` = '3'");
    $score_qry_3_b->execute();
    $score_id_3_b = $score_qry_3_b->fetchAll(PDO::FETCH_COLUMN);
    $score_id_3_b = implode("", $score_id_3_b);


    if ($score_id_3_a > $score_id_3_b){
        $winner_match_3 = $team_name_a_match_3;
        $advance_match_3_a = $conn->prepare("UPDATE `tbl_matches` SET `team_id_a`= '$team_a_match_3'  WHERE `id` = 6");
        $advance_match_3_a ->execute(array(":team_id_a" => '$team_name_a_match_3 '));
    } elseif($score_id_3_b > $score_id_3_a){
        $winner_match_3 = $team_name_b_match_3;
        $advance_match_3_b = $conn->prepare("UPDATE `tbl_matches` SET `team_id_a`= '$team_b_match_3'  WHERE `id` = 6");
        $advance_match_3_b->execute(array(":team_id_a" => '$team_name_b_match_3'));
    }

    //
    $score_qry_4_a = $conn->prepare("SELECT `score_team_a` FROM `tbl_matches` WHERE `id` = '4'");
    $score_qry_4_a->execute();
    $score_id_4_a = $score_qry_4_a->fetchAll(PDO::FETCH_COLUMN);
    $score_id_4_a = implode("", $score_id_4_a);

    $score_qry_4_b = $conn->prepare("SELECT `score_team_b` FROM `tbl_matches` WHERE `id` = '4'");
    $score_qry_4_b->execute();
    $score_id_4_b = $score_qry_4_b->fetchAll(PDO::FETCH_COLUMN);
    $score_id_4_b = implode("", $score_id_4_b);


    if ($score_id_4_a > $score_id_4_b){
        $winner_match_4 = $team_name_a_match_4;
        $advance_match_4_a= $conn->prepare("UPDATE `tbl_matches` SET `team_id_b`= '$team_a_match_4'  WHERE `id` = 6");
        $advance_match_4_a->execute(array(":team_id_b" => '$team_a_match_4'));
    } elseif($score_id_4_b > $score_id_4_a){
        $winner_match_4 = $team_name_b_match_4;
        $advance_match_4_b = $conn->prepare("UPDATE `tbl_matches` SET `team_id_b`= '$team_b_match_4'  WHERE `id` = 6");
        $advance_match_4_b->execute(array(":team_id_b" => '$team_b_match_4'));
    }

    // HIER STOPPEN

    $score_qry_5_a = $conn->prepare("SELECT `score_team_a` FROM `tbl_matches` WHERE `id` = 5");
    $score_qry_5_a->execute();
    $score_id_5_a = $score_qry_5_a->fetchAll(PDO::FETCH_COLUMN);
    $score_id_5_a = implode("", $score_id_5_a);

    $score_qry_5_b = $conn->prepare("SELECT `score_team_b` FROM `tbl_matches` WHERE `id` = 5");
    $score_qry_5_b->execute();
    $score_id_5_b = $score_qry_5_b->fetchAll(PDO::FETCH_COLUMN);
    $score_id_5_b = implode("", $score_id_5_b);

    if ($score_id_5_a > $score_id_5_b){
        $winner_match_5 = $winner_match_1;
    } elseif($score_id_5_a < $score_id_5_b){
        $winner_match_5 = $winner_match_2;
    }

    $score_qry_6_a = $conn->prepare("SELECT `score_team_a` FROM `tbl_matches` WHERE `id` = 6");
    $score_qry_6_a->execute();
    $score_id_6_a = $score_qry_6_a->fetchAll(PDO::FETCH_COLUMN);
    $score_id_6_a = implode("", $score_id_6_a);

    $score_qry_6_b = $conn->prepare("SELECT `score_team_b` FROM `tbl_matches` WHERE `id` = 6");
    $score_qry_6_b->execute();
    $score_id_6_b = $score_qry_6_b->fetchAll(PDO::FETCH_COLUMN);
    $score_id_6_b = implode("", $score_id_6_b);

    if ($score_id_6_a > $score_id_6_b){
        $winner_match_6 = $winner_match_3;
    } elseif($score_id_6_b > $score_id_6_a){
        $winner_match_6 = $winner_match_4;
    }

    $score_qry_7_a = $conn->prepare("SELECT `score_team_a` FROM `tbl_matches` WHERE `id` = 7");
    $score_qry_7_a->execute();
    $score_id_7_a = $score_qry_7_a->fetchAll(PDO::FETCH_COLUMN);
    $score_id_7_a =  implode("", $score_id_7_a);

    $score_qry_7_b = $conn->prepare("SELECT `score_team_b` FROM `tbl_matches` WHERE `id` = 7");
    $score_qry_7_b->execute();
    $score_id_7_b = $score_qry_7_b->fetchAll(PDO::FETCH_COLUMN);
    $score_id_7_b = implode("", $score_id_7_b);

    if ($score_id_7_a > $score_id_7_b){
        $champion = $winner_match_5;
    } elseif($score_id_7_b > $score_id_7_a){
        $champion = $winner_match_6;
    }
}
//header("Location: speelschema.php");