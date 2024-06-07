<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Account</title>
</head>
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
.dropbtn {
  background-color: #8093BF;
  color: white;
  padding: 16px;
  text-align: center;
  height:2vw ;
  font-size: 16px;
  border: none;
}
.dropdown {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
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
.dropdown-content a:hover {background-color: #ddd;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #6A7A9E;}
footer{
        background-color:#A46097;
        padding: 200px;
        display: flex;
        position: fixed;
       left: 0; 
       right: 0;
      }

      
      
      
      button:hover {
  opacity:1;
}



.logout{
  height:200px ;
}
.edit{
  height:200px ;
}


@media screen and (max-width: 300px) {
  .cancelbtn, .deletebtn {
    width: 100%;
  }
}
</style>
<body>
<header>
<div class="dropdown">
  <button class="dropbtn">Menu</button>
  <div class="dropdown-content">
  <a href="index.php">Index</a>
    <a href="mocklogin.php">Mocktail Builder</a>
    <a href="searchMock.php">Mocktail Search</a>
    <a href="logincheck.php">Account </a>
  </div>
</div>
</header>
<br>
<main>
<button class="edit" onclick="edit()">Edit Mocktails</button>
<br>
<br>
<br>

<button class="logout" onclick="logout()">Logout</button>



<script>
function logout(){
    
   
    location.replace("logout.php");
   
  }

  function edit(){
    
   
    location.replace("editmocks.php");
   
  }
</script>
    </main>
    <br>


<footer></footer>
</body>
</html>