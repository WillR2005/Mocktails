<?php
include 'includes/connDB.php';
session_start();

$sql = "SELECT id, uname FROM mocktail_users";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    if ( $row["uname"] == $_SESSION["userd"])
    {
        $_SESSION["Id"]= $row["id"];
    }
}