<?php
// Database connection
$mysqli = new mysqli('localhost', 'root', '', 'pharmacy_management_system');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get medicine ID to delete
$medicineId = $_GET['id'];

// Delete medicine from database
$sql = "DELETE FROM medicines WHERE medicine_id = ?";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("i", $medicineId);
if ($stmt->execute() === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$mysqli->close();
?>
