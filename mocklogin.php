<?php
include 'includes/connDB.php';
session_start();

if($_SESSION['login']== true)
{
    header('Location: createmocks.php');
    exit();
}
else
{
    header('Location: login.php');
}