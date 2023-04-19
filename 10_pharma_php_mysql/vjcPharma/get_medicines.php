<?php
// Database connection
$mysqli = new mysqli('localhost', 'root', '', 'pharmacy_management_system');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Retrieve medicines from database
$sql = "SELECT * FROM medicines";
$result = $mysqli->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['medicine_name'] . "</td>";
        echo "<td>" . $row['quantity'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td><a href='delete_medicine.php?id=" . $row['medicine_id'] . "'>Delete</a></td>"; // Delete Button
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>No medicines found</td></tr>";
}
$result->close();
$mysqli->close();
?>
