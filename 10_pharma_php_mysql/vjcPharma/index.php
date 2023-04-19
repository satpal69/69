<!DOCTYPE html>
<html>
<head>
    <title>Pharmacy Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Pharmacy Management System</h1>
    <form action="process.php" method="post">
        <label for="medicine_name">Medicine Name:</label>
        <input type="text" name="medicine_name" required>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" required>
        <label for="price">Price:</label>
        <input type="number" name="price" step="0.01" required>
        <input type="submit" value="Add Medicine">
    </form>
    <h2>Medicine Inventory</h2>
    <table>
        <tr>
            <th>Medicine Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        <?php include 'get_medicines.php'; ?>
    </table>
</body>
</html>
