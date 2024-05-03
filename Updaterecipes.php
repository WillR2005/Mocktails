<?php
include 'includes/connDB.php';

$upReci = "UPDATE mocktail_recipes SET Title = ?, ingredients = ?, instructions = ? WHERE uid = ?";

$upStmt = $conn->prepare($upReci);
if($upStmt === false) {
    die("Error preparing Update: ".$conn->error);
}

$Title = "";

$ingredients = json_encode("");

$instructions = json_encode("");

$uid =0 ;

$upStmt->bind_param("sssi",$Title,$ingredients,$instructions,$uid);

if($upStmt->execute()=== false){
    die("Error executing update:". $upStmt->error);
}
$upStmt->close();