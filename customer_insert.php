<?php
include 'db_connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$query = "INSERT INTO Customers (name, email, phone) VALUES ('$name', '$email', '$phone')";

if ($conn->query($query) === TRUE) {
    echo "New customer added successfully!";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
