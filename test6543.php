<?php
include 'includes/connDB.php';
session_start();

$sql = "SELECT id FROM mocktail_users";
$result = mysqli_query($conn, $sql);

//print value to screen
$row = mysqli_fetch_assoc($result);
$nrow = intval($row) +1;
echo $nrow;
