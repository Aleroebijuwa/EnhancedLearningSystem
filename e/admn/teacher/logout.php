<?php
if(!isset($_session))
session_start();

SESSION_destroy();
header('LOCATION: '.'../adminlogin.php');

?>