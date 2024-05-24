<?php
include 'includes/connDB.php';
session_start();

$_SESSION["userd"]="";
$_SESSION["login"]= false;
$_SESSION["Id"]= 0;

header('Location: Login.php');
exit();

?>
