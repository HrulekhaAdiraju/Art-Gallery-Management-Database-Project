<?php
include 'db_connection.php';

$name = $_POST['name'];
$birthplace = $_POST['birthplace'];
$age = $_POST['age'];
$style = $_POST['style'];

$query = "INSERT INTO Artists (name, birthplace, age, style_of_art) VALUES ('$name', '$birthplace', '$age', '$style')";

if ($conn->query($query) === TRUE) {
    echo "New artist added successfully!";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
