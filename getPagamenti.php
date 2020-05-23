<?php

header("Content-Type: application/json");

$server = 'localhost';
$userName = 'root';
$password = 'root';
$db = 'hotel_db';

$conn = new mysqli($server, $userName, $password, $db);

if($conn -> connect_errno){
  echo $conn -> connect_errno;
  return;
}

$sql = "
    SELECT *
    FROM pagamenti
  ";

$results = $conn-> query($sql);

if($results -> num_rows < 1){
  echo 'no results';
  return;
}

$pagamenti = [];

while ($row = $results -> fetch_assoc()){
  $pagamenti[] = $row ['status'] . " " . $row ['price'];
}

$conn -> close();


echo json_encode($pagamenti);

 ?>
