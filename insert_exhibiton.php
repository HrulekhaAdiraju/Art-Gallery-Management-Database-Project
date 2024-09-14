<?php
include 'db_connection.php';

$title = $_POST['exhibition_title'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];

$query = "INSERT INTO Exhibitions (title, start_date, end_date) VALUES ('$title', '$start_date', '$end_date')";

if ($conn->query($query) === TRUE) {
    echo "New exhibition added successfully!";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
