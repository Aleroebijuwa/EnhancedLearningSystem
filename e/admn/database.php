<?php

/**
 * @file
 * Connect to mysql
 */

//Create connection credentials
$db_host = 'localhost';
$db_name = 'rcqqiiok_crselearning';
$db_user = 'rcqqiiok_root';
$db_pass = 'KAYanimax.1';

//Create mysqli object
$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);

//Error handler
if($mysqli->connect_error){
	printf("Connect failed: %s\n",$mysqli->connect_error);
	exit;
}


?>
