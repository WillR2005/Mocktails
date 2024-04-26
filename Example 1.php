<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style></style>
    <script></script>
</head>
<body>
    <?php
    echo "<h1>Welcome to the Mocktail Website</h1>";


 if ($_SERVER['REQUEST_METHOD']== "POST"){
    $user = $_POST['user'];
} else{
    $user ="Will";
}


    echo "<p>Good Afternoon:$user.</p>";
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>"></form>
    <input type="text" name= "user">
    <input type="submit">
</body>
</html>