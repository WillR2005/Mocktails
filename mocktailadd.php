<?php
include 'includes/connDB.php';

$sql = "INSERT INTO mocktail_recipes (Title,ingredients,method)VALUES (?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sss", $Title, $ingredients,$method);


$Title = $_POST['Title'] ;
$ingredients = json_encode($_POST['Ingredients']);
$method =json_encode($_POST['Instructions']);

if ($stmt->execute()) {
    echo "New record created successfully";
} else{
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close statement and connection
$stmt->close();
$conn->close();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Refresh" content="0; url='searchmock.php'" />
    <title>Document</title>
</head>
<body>
    
</body>
</html>