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
}
      .a1{
        background-color: #F5DB74;
        text-align: center;
        

      }
      header h2 {
   margin-top: 0;
}
article {
   margin-top: 10px;
   margin-bottom: 20px;}
   figure {
   margin: 0;
   padding: 0;
   text-align: center;
}
   
      </style>
</head>
<body>
<div class="container">
<?php
      $sql ="SELECT id,title,ingredients,method FROM mocktail_recipes";
      $result = mysqli_query($conn, $sql);
       $i = 0;
       while($row = mysqli_fetch_assoc($result))  {
        $sectionsData = 
            ["header" => "Section Header ", "content" => "This is the content."]
            ;   
        $section = $sectionsData;
           ?>
<section>
<header>
<h2><?php echo $row["title"]; ?></h2>
</header>
<article>
<p><?php echo Json_decode($row["ingredients"]); ?></p>
<br>
<p><?php echo Json_decode($row["method"]); ?></p>
</article>

<footer>

</footer>
</section>
<?php
           $i++;
       }
       ?>
</div>
</body>
</html>