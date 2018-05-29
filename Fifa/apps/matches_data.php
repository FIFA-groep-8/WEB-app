<?php
 require ('..//connection/dbconnector.php');

$tbl_matches_download = $conn->prepare('SELECT * FROM tbl_matches');

$tbl_matches_download->execute();

$download_matches = $tbl_matches_download->fetchAll(PDO::FETCH_ASSOC);



$fp_matches = fopen('Matchcsv.csv', 'w');

foreach ($download_matches as $matches) {
    fputcsv($fp_matches, $matches);
}



fclose($fp_matches);

//Downloads the file
  $matches_file_name="Matchcsv.csv";
  header("Content-disposition: attachment;filename=$matches_file_name");
  readfile($matches_file_name);
?>




