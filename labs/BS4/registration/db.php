<?php
if(!isset($_SESSION)) { session_start(); }

//set timezone
date_default_timezone_set('Asia/Kolkata');

$databaseHost = 'localhost';
$databaseName = 'sndp_db';
$databaseUsername = 'sndp_user';
$databasePassword = 'ZAQ!xsw2';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

?>
