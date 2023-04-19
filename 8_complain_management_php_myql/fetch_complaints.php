<?php
// Include database connection
require_once "db_connection.php";

// Fetch complaints from database
$query = "SELECT * FROM complaints ORDER BY id DESC";
$result = mysqli_query($conn, $query);

// Display complaints
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="complaint">';
        echo '<h3>' . $row["name"] . '</h3>';
        echo '<p>Email: ' . $row["email"] . '</p>';
        echo '<p>Complaint: ' . $row["complaint"] . '</p>';
        echo '</div>';
    }
} else {
    echo '<p>No complaints found.</p>';
}

// Close database connection
mysqli_close($conn);
?>
