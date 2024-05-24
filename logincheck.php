<?php
include 'includes/connDB.php';
session_start();

if($_SESSION['login']== true)
{
    header('Location: eddAcc.php');
    exit();
}
else{
    header('Location: Login.php');
exit();
}