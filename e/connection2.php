<?php
//$servername = "mariadb-040.wc2";
//$username = "2033276_root";
//$password = "KAYanimax.1";
//$dbname = "2033276_crselearning";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "preunielearning";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?> 