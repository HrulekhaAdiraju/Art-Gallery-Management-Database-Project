<?php
include 'db_connection.php';

$customer_id = $_POST['customer_id'];
$artwork_id = $_POST['artwork_id'];
$quantity = $_POST['quantity'];

// Decrease the stock of the artwork in the database
$update_stock_query = "UPDATE Artworks SET stock = stock - $quantity WHERE artwork_id = $artwork_id";
$conn->query($update_stock_query);

// Insert purchase information into Purchases table
$purchase_query = "INSERT INTO Purchases (customer_id, artwork_id, quantity) VALUES ($customer_id, $artwork_id, $quantity)";

if ($conn->query($purchase_query) === TRUE) {
    echo "Purchase successful!";
} else {
    echo "Error: " . $purchase_query . "<br>" . $conn->error;
}

$conn->close();
?>
