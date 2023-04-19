<!DOCTYPE html>
<html>
<head>
    <title>College Admission Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>College Admission Form</h1>
        <form action="submit_admission.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="course">Course:</label>
            <input type="text" id="course" name="course" required>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
