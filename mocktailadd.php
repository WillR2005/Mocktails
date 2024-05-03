<?php
include 'includes/connDB.php';

$stmt = $conn->prepare("INSERT INTO mocktail_recipes (Title,ingredients,instructions)VALUE (?,?,?)");
;

$stmt->bind_param("sss", $Title, $ingredients,$instructions);


$Title = $_POST['Title'] ;
$ingredients = $_POST['Ingredients'];
$instructions =$_POST['Instructions'];

if ($stmt->execute()) {
    echo "New record created successfully";
} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close statement and connection
$stmt->close();
$conn->close();