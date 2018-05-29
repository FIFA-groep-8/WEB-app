<?php
require ('..//connection/dbconnector.php');

$tbl_players_download = $conn->prepare('SELECT * FROM tbl_players');

$tbl_players_download->execute();

$download_players = $tbl_players_download->fetchAll(PDO::FETCH_ASSOC);



$fp_players = fopen('Playercsv.csv', 'w');

foreach ($download_players as $players) {
    fputcsv($fp_players, $download_players);
}



fclose($fp_players);

//Downloads the file
$players_file_name="Playercsv.csv";
header("Content-disposition: attachment;filename=$players_file_name");
readfile($players_file_name);
?>




