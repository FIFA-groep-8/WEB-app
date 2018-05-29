<?php
 require ('..//connection/dbconnector.php');

$tbl_teams_download = $conn->prepare('SELECT * FROM tbl_teams');

$tbl_teams_download->execute();

$download_teams = $tbl_teams_download->fetchAll(PDO::FETCH_ASSOC);

$fp_download = fopen('Teamcsv.csv', 'w');

foreach ($fp_download as $download) {
    fputcsv($fp_download, $download);
}

fclose($fp_download);

//Downloads the file
  $download_file_name="Teamcsv.csv";
  header("Content-disposition: attachment;filename=$download_file_name");
  readfile($download_file_name);
?>




