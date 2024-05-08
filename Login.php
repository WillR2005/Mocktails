<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <style>
        header{
        background-color:#F5AFA7 ;
        height:5vw ;
        border: thin solid #e7d5d3 ;
        display: flex;
      position: fixed;
     top: 0; 
     left: 0; 
     right: 0;
      }
      footer{
        background-color:#A46097;
        padding: 200px;
        position: fixed;
        bottom: 0;
        left: 0; 
       right: 0;
      }
      main{
        height:400px ;
        width: 500px;
        max-width: 50vw;
        background-color: rgb(230, 203, 230);
        color: rgb(63, 100, 88);
        padding: 5px;
        display:grid;
        position:fixed;
        right:0;
        left:0;
        top:0;
       
        
        
      }


    </style>
</head>
<header></header>


<body>
<main>
<form method="post" action="validate.php">
<br><br><br><br><br><br><br>    
<input type="text" name= "user">
<br>    
<input type="password" name="pword">
    <br>
    <input type="submit">
    
</form>
    </main>
<footer></footer>
</body>
</html>