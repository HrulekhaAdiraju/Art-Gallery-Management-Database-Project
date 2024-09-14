<?php
include 'db_connection.php';

$title = $_POST['title'];
$year = $_POST['year'];
$kind = $_POST['kind'];
$price = $_POST['price'];

$query = "INSERT INTO Artworks (title, year_created, kind_of_art, price) VALUES ('$title', '$year', '$kind', '$price')";

if ($conn->query($query) === TRUE) {
    echo "New artwork added successfully!";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
