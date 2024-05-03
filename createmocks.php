<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Mocktails</title>
</head>
<body>
<form method="post" action="mocktailadd.php">
   
<input type="text" name= "Title">
<br><br>
<input type="text" name="Ingredients">
<br><br>
<input type="text" name="Instructions">
<br><br>
<input type="submit">
</form>
</body>
</html>