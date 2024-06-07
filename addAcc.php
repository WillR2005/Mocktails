<?php
include 'includes/connDB.php';
session_start();

$sql = "INSERT INTO mocktail_users (uname,name,email)VALUES (?,?,?)";
$stmt = $conn->prepare($sql);

$qsl = "INSERT INTO mocktail_passwords (pass_hash)VALUES (?)";
$pastmt = $conn->prepare($qsl);

$stmt->bind_param("sss", $uname, $name,$email);
$uname = $_POST['user'] ;
$name = $_POST['name'];
$email = $_POST['email'];

if ($stmt->execute()) {
    echo "New record created successfully";
} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$pastmt->bind_param("s",$pass_hash);
$pass_hash = password_hash($_POST['pword'],PASSWORD_DEFAULT);
if ($pastmt->execute()) {
    echo "New record created successfully";
    $_SESSION["userd"]= $uname;
    $_SESSION["login"]= true;
    
    
} else{
    echo "Error: " . $qsl . "<br>" . $conn->error;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Refresh" content="0; url='logincheck.php'" />
    <title>Document</title>
</head>
<body>
    
</body>
</html>
