<?php
if(!isset($_SESSION)) { session_start(); }

//set timezone
date_default_timezone_set('Asia/Kolkata');

$databaseHost = 'localhost';
$databaseName = 'sndp_db';
$databaseUsername = 'sndp_user';
$databasePassword = 'ZAQ!xsw2';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$_SESSION['DIR']="www.sandeepana.co.in";
$_SESSION['usertype']="teacher";
$_SESSION['username']="S Das";

$_SESSION['nav-tab-color']="green";
$_SESSION['nav-image']="sidebar-1.jpg";
$ut=1;
$_SESSION['ut']=$ut;
?>
