<?php
include 'db_connection.php';

$result = $conn->query("SELECT * FROM Artworks");

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Title</th><th>Year</th><th>Kind</th><th>Price</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["artwork_id"]. "</td><td>" . $row["title"]. "</td><td>" . $row["year_created"]. "</td><td>" . $row["kind_of_art"]. "</td><td>" . $row["price"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No artworks found.";
}

$conn->close();
?>
