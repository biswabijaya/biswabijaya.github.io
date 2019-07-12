<?php
if(!isset($_SESSION)) { session_start(); }

//set timezone
date_default_timezone_set('Asia/Kolkata');
setlocale(LC_MONETARY, 'en_IN');

$databaseHost = 'localhost';
$databaseName = 'u144380489_kis';
$databaseUsername = 'u144380489_kisus';
$databasePassword = 'bhu8NJI(';

$mysqli =  mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$_SESSION['DIR']="kisaniyat.biswabijaya.com";
?>
