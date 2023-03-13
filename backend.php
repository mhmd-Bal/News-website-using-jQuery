<?php
include("connection.php");

$query = $mysqli->prepare('select * from news');
$query->execute();
$result = $query->get_result();

$news = [];

while ($row = $result->fetch_assoc()) {
  $news[] = $row;
}


echo json_encode($news);
?>