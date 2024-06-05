<?php
include 'includes/connDB.php';
session_start();
$sql ="SELECT id,title,ingredients,method FROM mocktail_recipes";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
echo $row["title"];

echo Json_decode($row["ingredients"]);

echo Json_decode($row["method"]);

}
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
        grid: auto / auto auto auto;
        }
      section{
        margin: 10px;
        padding: 5px;
        height: auto ;
        width: 500px;
        margin-left: auto;
       margin-right: auto;
       color:#454545;
        
      }
      .a1{
        background-color: #F5DB74;
        text-align: center;
        

      }
    </style>
</head>
<body>
<main>

<section id ="a1"class = "a1"  >

    <div class="a1">
   
    <div class="a1"><h2>
<?php
$sql ="SELECT id,title,ingredients,method FROM mocktail_recipes";
$result = mysqli_query($conn, $sql);
 while($row = mysqli_fetch_assoc($result)) {
 echo nl2br ($row["title"]. "\n"."\n"."Ingredients:"."\n".Json_decode($row["ingredients"]). "\n"."\n"."Method:"."\n".Json_decode($row["method"]));
 }
 ;
?>

</h2></div>

        
        
    </div>
    </section>
    </main>
</body>
</html>
