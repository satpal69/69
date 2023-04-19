<?php
// Database connection
$mysqli = new mysqli('localhost', 'root', '', 'pharmacy_management_system');
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Get input data
$medicineName = $_POST['medicine_name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

// Insert medicine into database
$sql = "INSERT INTO medicines (medicine_name, quantity, price) VALUES (?, ?, ?)";
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("sdi", $medicineName, $quantity, $price);
if ($stmt->execute() === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $stmt->error;
}
$stmt->close();
$mysqli->close();
?>
