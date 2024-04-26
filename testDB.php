<?php
include 'includes/connDB.php';

$sql = "SELECT * FROM mocktail_recipes";

$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

if ($stmt->execute() === false)
{
    die("Error executing statement: " . $stmt->error);
}
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row['recipe_id'] . "<br>";
    echo "User UD: " . $row['uid'] . "<br>";
    echo "Recipe Title: " . $row['Title'] . "<br>";
    echo "Ingredients: " . json_encode($row['ingredients']) . "<br>";
    echo "Method: " . json_encode($row['instructions']) . "<br>";
    $ingredientsArray = json_decode(stripslashes($row['ingredients']), true);
    $methodArray = json_decode(stripslashes($row['instructions']), true);
    var_dump($ingredientsArray);
    var_dump($methodArray);

    echo implode(" ",$ingredientsArray). "<br>";
    for ($i = 0; $i < count($ingredientsArray['ingredients']); $i++){
        $temp = $ingredientsArray['ingredients'][$i];
        echo $temp['name'] . ": " . $temp['amount'] . " " . $temp['unit'] . "<br>";
    }
}

$stmt->close();
$conn->close();

?>