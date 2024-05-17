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
      main{
        height:550px ;
        width: 500px;
        max-width: 50vw;
        background-color: rgb(230, 203, 230);
        border: 3px solid #C6A6C7 ;
        
        padding: 5px;
        display:grid;
        grid: auto / auto auto auto;
        margin-left: auto;
        margin-right: auto;
       
        
        
      }
      section{
        margin: 10px;
        padding: 5px;
        height: 50px;
        width: 500px;
        margin-left: auto;
       margin-right: auto;
        background-color: #E0B8EB;
        border: 3px solid #C6A6C7 ;
        
        
      }
    }#playerContainer a:hover{
        text-decoration: underline;
      }
      .New:hover{
        background-color:#ECC2F7;

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
  <section  class= "New"onclick=newAcc()> <p>Create a New Account</p></section>
    <script>
        function newAcc(){
    location.replace("CreateAcc.php");
  }
    </script> 
<footer></footer>
</body>
</html>