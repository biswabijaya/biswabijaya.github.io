<?php
session_start();
session_unset();
session_destroy();
header('Location: https://www.biswabijaya.com/labs/BS4/');
exit();
?>
