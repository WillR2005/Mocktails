<?php
include 'includes/connDB.php';
session_start();

$qls ="SELECT * FROM mocktail_users ORDER BY id DESC LIMIT 1;";

echo $qls ;