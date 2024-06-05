<?php
include 'includes/connDB.php';
session_start();
$sql ="SELECT title FROM mocktail_recipes";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mocktail Searching</title>
    <style>
        header{
          background-color:#F5AFA7 ;
        height:2vw ;
        border: thin outset #e7d5d3 ;
        display: flex;
      position: fixed;
     top: 0; 
     left: 0; 
     right: 0;
      }
      footer{
        background-color:#A46097;
        padding: 200px;
        display: flex;
        position: fixed;
        
        
       left: 0; 
       right: 0;
      }
      

    </style>
</head>
<header></header>
<body>

</body>

</html>