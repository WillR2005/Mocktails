<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mocktails</title>
    <style></style>
    <script></script>
</head>
<body>
    <?php
    echo "<h1>Welcome to the Mocktail Website</h1>";
    if(isset($_SESSION['user'])){
      $user=  $_SESSION['user'];
    }else
    {$user = "User";}

    echo "<p>Good Afternoon:$user.</p>";
    ?>
    <form method="post" action="validate.php">
    <input type="text" name= "user">
    <input type="submit">
    <input type="password" name="pword">
</form>
</body>
</html>