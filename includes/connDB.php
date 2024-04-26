<?php
include 'config.php';

$conn = new mysqli(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);

if($conn->connect_error){
    die("Connection Failed:".$conn->connect_error);
}else{
    echo "Connected to database successfully!";
}