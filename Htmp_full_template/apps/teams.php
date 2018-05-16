<?php
require ("../connection/dbconnector.php");

$name = $_POST['name_team'];
$poule = $_POST['poule'];

$select = $conn->prepare("SELECT `name` FROM `tbl_teams` WHERE `name` = '$name'");
$select->execute(array(":name" => $name));

if (empty($name) && empty($poule) || $select->rowCount() > 0 ){
    header("location: ../opstelling.php?message=xaincorrect");
} else{
    for ($i = 1;$i < 9; $i++) {
        $student_numb = $_POST['student_numb' . $i];
        $first_name = $_POST['first_name' . $i];
        $last_name = $_POST['last_name' . $i];

        $student_select = $conn->prepare("SELECT `name` FROM `tbl_teams` WHERE `name` = '$student_numb'");
        $student_select->execute(array(":name" => $name));

        $first_select = $conn->prepare("SELECT `name` FROM `tbl_teams` WHERE `name` = '$first_name'");
        $first_select->execute(array(":name" => $name));

        $last_select = $conn->prepare("SELECT `name` FROM `tbl_teams` WHERE `name` = '$last_name'");
        $last_select->execute(array(":name" => $name));

        if (!empty($student_numb) && !empty($first_name) && !empty($last_name || $student_select->rowCount() > 0  || $first_select->rowCount() > 0  || $last_select->rowCount() > 0)){
            $stm = $conn->prepare("INSERT INTO `tbl_teams`(`poule_id`, `name`) VALUES ('$poule', '$name')");
            $stm->execute(array(":poule_id" => '$poule', ":name" => '$name'));
//        INSERT INTO `tbl_teams`(`poule_id`, `name`) VALUES (2, 'Naam team')
            $qry = $conn->prepare("SELECT `id` FROM `tbl_teams` WHERE `name` = '$name'");
            $qry->execute(array(":name" => $name));

            $id = $qry->fetchAll(PDO::FETCH_COLUMN);

            $team_id = implode("", $id);
            $query = $conn->prepare("INSERT INTO `tbl_players`(`student_id`, `team_id`, `first_name`, `last_name`) VALUES ('$student_numb', '$team_id', '$first_name', '$last_name')");
            $query->execute(array("student_id" => '$student_numb', "team_id" => 'team_id', "first_name" => '$first_name', "last_name" => '$last_name'));


            header("location: ../opstelling.php?message=correct");
        } else{
            header("location: ../opstelling.php?message=incorrect");
        }
    }
// hier onder mis veranderen in verband met als iemand een bestaande player wil toevoegen

}