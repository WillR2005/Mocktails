<?php
include 'includes/connDB.php';
session_start();
$sql ="SELECT title FROM mocktail_recipes";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mocktail Searching</title>
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
      #mockSearch{
        width: 100%;
     font-size: 18px;
     padding: 11px;
     border: 1px solid #ddd;
      }
      #Mocktails{
        list-style-type: none;
     padding: 0;
     margin: 0;
      }
      #Mocktails li a{
        padding: 12px;
     text-decoration: none;
     color: black;
     display: block;
      }
      #Mocktails li a:hover{
        background-color: #eee;
      }


    </style>
</head>
<header></header>
<body>
<br>
<br>
<br>
<input type ="text" id="mockSearch" onkeyup="Searchm()" placeholder="Search" title="🍋">
<ul id="Mocktails">
 <?php
 $mockamou= 0;
 $mockArr = array();
 while($row = mysqli_fetch_assoc($result)||$mockamou <=10)
 {
    $mockArr[]= $row['title']?? '' ;
    echo $row['title'] ;
    $mockamou = $mockamou + 1 ;
 }
 list($a, $b, $c, $d, $e, $f,$g,$h,$i,$j)= $mockArr;
echo implode (" ",$mockArr);

?>
    </ul>

    <script>
function Searchm() {
  // Declare variables
  var input, filter, ul, li, a, i;
  input = document.getElementById("mockSearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("Mocktails");
  li = ul.getElementsByTagName("li");

  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>
</body>

</html>