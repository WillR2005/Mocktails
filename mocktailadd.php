<?php
include 'includes/connDB.php';

$sql = "INSERT INTO mocktail_recipes (Title,ingredients,instructions)VALUE (?,?,?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("sss", $title, $ingredients,$instructions);