<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mocktails</title>
    <style>
      body{background-color: #FEE2F5;
        }
        header{
        background-color:#F5AFA7 ;
        min-height:2vw ;
        border: thin solid #e7d5d3 ;
        display: flex;
      position: fixed;
     top: 0; 
     left: 0; 
     right: 0;
      }
    </style>
    <script></script>
</head>
<header></header>
<body>
    <?php
   
    echo "<h1>Welcome to the Mocktail Website</h1>";
    if(isset($_SESSION['user'])){
      $user=  $_SESSION['user'];
    }else
    {$user = "User";}

    echo "<p>Good Afternoon:$user.</p>";
    ?>
    <form method="post" action="validate.php">
    <input type="text" name= "user">
    <input type="submit">
    <input type="password" name="pword">
</form>
</body>
</html>