<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "toll_tax_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$vehicleType = $_POST['vehicleType'];
$tollAmount = $_POST['tollAmount'];

// Insert form data into the database
$sql = "INSERT INTO transactions (vehicle_type, toll_amount) VALUES ('$vehicleType', $tollAmount)";
if ($conn->query($sql) === TRUE) {
    // Success, redirect to index.php
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
