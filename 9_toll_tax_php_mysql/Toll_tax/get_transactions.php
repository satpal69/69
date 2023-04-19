

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

// Fetch transaction data from the database
$sql = "SELECT * FROM transactions ORDER BY id DESC";
$result = $conn->query($sql);

// Store the data in an array
$transactions = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $transactions[] = $row;
    }
}

// Return the data as JSON
echo json_encode($transactions);

$conn->close();
?>
