<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mixolotl</title>
    <link rel="icon"type="images/axolotl.jpg" href="/images/axolotl.jpg">
    <style>
      body{background-color: #FEE2F5;
        }#playerContainer a:hover{
        text-decoration: underline;
      }
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
        height: 200px;
        width: 200px;
        margin-left: auto;
       margin-right: auto;
       color:#454545;
        
      }
      .Create{
        background-color: #F5DB74;
        text-align: center;
        

      }
      .Search{
        background-color: #7E98E9;
        text-align: center;
        
      }

      .Top{
        background-color:#2D9A03;
        text-align: center;
        
      }
      .Account{
        background-color:#EBA0B9;
        text-align: center;
        
      }
      footer{
        background-color:#A46097;
        padding: 200px;
        display: flex;
        position: fixed;
        
        
       left: 0; 
       right: 0;
      }


      .Create:hover{
        background-color: blanchedalmond;
        

      }
      .Search:hover{
        background-color:#A7B8FF;
      }
      .Top:hover{
        background-color:#3AC704 ;
      }
      .Account:hover{
        background-color:#CFA6C2;
      }
      .createmock{{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}}
    </style>
    <script></script>
</head>
<header></header>
<body>
    <?php
   
    echo "<h1> <br> Welcome to the Mocktail Website</h1>";
    if(isset($_SESSION['user'])){
      $user=  $_SESSION['user'];
    }else
    {$user = "User";}

    echo "<p>Good Afternoon:$user.</p>";
    ?>
    
<main>

<section id ="CreateMocktail"class = "Create" >

    <div class="description">
   
    <div class="createmock"><h2><u>Mocktail <br>   builder</u> </h2></div>

        
        
    </div>
    </section>
<section id ="SearchMocktail"class = "Search">


    <div class="description">
        <h2><u>Search for Mocktails</u> </h2>
        <p> </p>
    </div>
    </section>
<br>
<section id ="TopMocktail"class = "Top">
  <div class="description">
        <h2><u>Top Mocktails</u> </h2>
        <p> </p>
    </div>
    </section>
<section id ="AccountMocktail"class = "Account" onclick="Account()">
  <div class="description">
    <h2><u> Account</u> </h2>
    <p> </p>
    
</div>
</section>
</main>
<script>
  function Account(){
    location.replace("Login.php");
  }
</script>

<footer>
  </footer>

</body>
</html>