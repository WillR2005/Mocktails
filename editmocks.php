<?php
include 'includes/connDB.php';
session_start();
$sql ="SELECT id,title,ingredients,method FROM mocktail_recipes";
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        main{
        height: auto ;
        width: auto ;
        max-width: 50vw;
        
        
        padding: 5px;
        display:grid;
        grid: auto;
        }
        .container {
   width: 80%;
   margin: 0 auto;
   padding: 20px;
   
}
section {
  margin-bottom: 40px;
   padding: 20px;
   border: 1px solid #ccc;
   background-color: #FDEAA0;
    width: 1500px;
    
}
      .a1{
        background-color: #F5DB74;
        text-align: center;
        left: 0 ;

      }
      header h2 {
   margin-top: 0;
}
article {
   margin-top: 10px;
   margin-bottom: 20px;}
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
       
       left: 0;
       bottom: 0;
       width: 100%;
        
        
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
.dropdown-content a:hover {background-color: #ddd;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #6A7A9E;}
#searchtext span{
    background-color:#A1F7FA;
    color:#555;
}
.ingredients{
    ;
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
<br>
<br>

<br>
<br>
<div id="searchtext">
 <div class="container">
<?php
      $sql ="SELECT id,title,ingredients,method FROM mocktail_recipes";
      $result = mysqli_query($conn, $sql);
       $i = 0;
       while($row = mysqli_fetch_assoc($result))  {
        
        if ( $row["id"]= $_SESSION["Id"]){
        $sectionsData = 
            ["header" => "Section Header ", "content" => "This is the content."]
            ;   
        $section = $sectionsData;
        }?>
<section>

<h2><input type="text" name= "ingredients"value="<?php echo ($row["title"]); ?>" size="200"></h2>

<article>
<input type="text" name= "ingredients"value="<?php echo Json_decode($row["ingredients"]); ?>" size="200">
<br>
<br>
<input type="text" name= "ingredients"value="<?php echo Json_decode($row["method"]); ?>" size="200">
<p hidden value="id"> <?php $row["id"]; ?></p>
</article>
</div id ="searchtext">




</section>
<?php
           $i++;
       }
       ?>
 </div>


<script>
function highlightSearch() {
    var text = document.getElementById("Mocksearch").value;
    var Mocksearch = new RegExp("(\\b" + text + "\\b)", "gim");
    var e = document.getElementById("searchtext").innerHTML;
    var enew = e.replace(/(<span>|<\/span>)/igm, "");
    document.getElementById("searchtext").innerHTML = enew;
    var newe = enew.replace(Mocksearch, "<span>$1</span>");
    document.getElementById("searchtext").innerHTML = newe;

}</script>
<button class="Submit" onclick="sub()">Submit Edits</button>


<script>
function sub()
{
    <?php
    while($row = mysqli_fetch_assoc($result))  {
        
        if ( $row["id"]= $_SESSION["Id"]){
        $sectionsData = 
            ["header" => "Section Header ", "content" => "This is the content."]
            ;   
        $section = $sectionsData;
        }}?>
}

    </script>
<footer>

</footer>
</body>
</html>