<?php
// Include database connection
require_once "db_connection.php";

// Fetch form data
$name = $_POST["name"];
$email = $_POST["email"];
$complaint = $_POST["complaint"];

// Insert complaint details into database
$query = "INSERT INTO complaints (name, email, complaint) VALUES ('$name', '$email', '$complaint')";
$result = mysqli_query($conn, $query);

// Return success or failure
if ($result) {
    header("Location: index.php");
} else {
    echo "Failed to submit complaint";
}
?>
