<!DOCTYPE html>
<html>
<head>
    <title>Toll Tax Management System</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <h1>Toll Tax Management System</h1>
    <form action="process.php" method="post">
        <label for="vehicleType">Vehicle Type:</label>
        <select name="vehicleType" id="vehicleType">
            <option value="Car">Car</option>
            <option value="Motorcycle">Motorcycle</option>
            <option value="Bus">Bus</option>
            <option value="Truck">Truck</option>
        </select>
        <label for="tollAmount">Toll Amount:</label>
        <input type="number" name="tollAmount" id="tollAmount" step="0.01" min="0">
        <input type="submit" value="Submit">
    </form>

    <h2>Toll Transactions</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Vehicle Type</th>
                <th>Toll Amount</th>
                <th>Date and Time</th>
            </tr>
        </thead>
        <tbody id="transactionTableBody">
            <!-- Table rows will be added dynamically using JavaScript -->
        </tbody>
    </table>
</body>
</html>
