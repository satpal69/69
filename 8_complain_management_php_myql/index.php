<!DOCTYPE html>
<html>
<head>
    <title>Complaint Submission Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Complaint Submission Form</h1>
        <form action="submit_complaint.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="complaint">Complaint:</label>
            <textarea id="complaint" name="complaint" rows="5" required></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
    <div class="container">
        <h1>Complaints</h1>
        <div class="complaints">
            <?php require_once "fetch_complaints.php"; ?>
        </div>
    </div>
</body>
</html>
