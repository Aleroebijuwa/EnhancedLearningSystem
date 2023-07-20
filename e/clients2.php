<?php
session_start();
//include_once('incl/config.php');
include('connection.php');

$query = "SELECT * FROM bible_studies";
$result = mysqli_query($con, $query);


$bible_studies = json_decode(file_get_contents('bible_studies.txt'));
//$codedcourselist = file_get_contents('courselist.txt');

echo '<pre>';

print_r($bible_studies);

echo '</pre>';

//while($row = mysqli_fetch_assoc($result)){	
//array_push($courselist, $row);
//$courselist[] = 	
//}

//echo json_encode($courselist);




?>