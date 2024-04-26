<?php
include 'includes/connDB.php';

// Prepare the SQL statement with placeholders
$sql = "INSERT INTO mocktail_users (uname, name , email, socials) VALUES (?, ?, ?, ?)";

// Prepare the statement
$stmt = $conn->prepare($sql);

// Bind parameters
$stmt->bind_param("ssss", $uname, $name, $email, $socials);

// Set parameters and execute the statement
$uname = "Marktails";
$name = "Mark";
$email = "Mocktails@gmail.com";
$socials = '{"socials":[
    {"Facebook":"Marktails04"},
    {"Twitter":"Marktails03"},
    {"Instagram":"Mark.tails02"}]
}';

if ($stmt->execute()) {
    echo "New record created successfully";
} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close statement and connection
$stmt->close();
$conn->close();