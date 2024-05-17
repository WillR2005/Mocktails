<?php
include 'includes/connDB.php';

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
} else{
    echo "Error: " . $qsl . "<br>" . $conn->error;
}

