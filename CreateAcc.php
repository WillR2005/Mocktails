<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewAccount</title>
</head>
<style>
        body{background-color: #DAF2F2;
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
</style>
<header></header>

<body>
<main>
<form method="post" action="addAcc.php">
<br><br><br><br><br><br><br>    
<input type="text" name= "user"value="Username">
<br><br>
<input type="text" name="name" value=" Name">
<br><br>
<input type="email" name="email"value=" Email">
<br><br>
<input type="password" name="pword" >
<br>   <br>
    <input type="submit">
    
</form>

    </main>  

   <footer> </footer>
</body>
</html>