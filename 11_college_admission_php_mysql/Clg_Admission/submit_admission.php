<?php
// Include database connection
require_once "db_connection.php";

// Fetch form data
$name = $_POST["name"];
$email = $_POST["email"];
$course = $_POST["course"];

// Insert admission details into database
$query = "INSERT INTO admissions (name, email, course) VALUES ('$name', '$email', '$course')";
$result = mysqli_query($conn, $query);

// Return success or failure
if ($result) {
    echo "Admission submitted successfully";
} else {
    echo "Failed to submit admission";
}
?>
