<?php
include 'db_connection.php';

$result = $conn->query("SELECT * FROM Artists");

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Birthplace</th><th>Age</th><th>Style</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["artist_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["birthplace"]. "</td><td>" . $row["age"]. "</td><td>" . $row["style_of_art"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No artists found.";
}

$conn->close();
?>
