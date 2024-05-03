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
        }#playerContainer a:hover{
        text-decoration: underline;
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
      main{
        min-height: 50vw;
        max-width: 50vw;
        background-color: rgb(230, 203, 230);
        color: rgb(63, 100, 88);
        padding: 5px;
        display:grid;
        grid: auto / auto auto auto;
      }
      section{
        margin: 10px;
        padding: 5px;
        max-width: 40vw;
        max-height: 40vw;
        background-color: #E2CD7A;
      }
      section:hover{
        background-color: blanchedalmond;
        

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
<main>
<section id ="CreateMocktail"class = "card">

    <div class="description">
        <h2><u>Mocktail builder</u> </h2>
        <p> </p>
    </div>
</main>
</body>
</html>