<?php
include 'includes/connDB.php';

$sql = "INSERT INTO mocktail_recipes (Title,ingredients,instructions)VALUES (?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sss", $Title, $ingredients,$instructions);


$Title = $_POST['Title'] ;
$ingredients = json_encode($_POST['Ingredients']);
$instructions =json_encode($_POST['Instructions']);

if ($stmt->execute()) {
    echo "New record created successfully";
} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close statement and connection
$stmt->close();
$conn->close();