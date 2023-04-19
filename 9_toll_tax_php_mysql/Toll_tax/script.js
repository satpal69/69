// Function to update the table with transaction data
function updateTransactionTable() {
    // Send a request to fetch the transaction data from the server
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                // Success, parse JSON response and update the table
                var transactions = JSON.parse(xhr.responseText);
                var tableBody = document.getElementById("transactionTableBody");
                tableBody.innerHTML = ""; // Clear existing table rows
                transactions.forEach(function(transaction) {
                    var row = document.createElement("tr");
                    row.innerHTML = `
                        <td>${transaction.id}</td>
                        <td>${transaction.vehicle_type}</td>
                        <td>${transaction.toll_amount}</td>
                        <td>${transaction.date_time}</td>
                    `;
                    tableBody.appendChild(row);
                });
            } else {
                console.error("Failed to fetch transaction data");
            }
        }
    };
   
    xhr.open("GET", "get_transactions.php", true);
    xhr.send();
    }
    
    // Call the function initially to populate the table
    updateTransactionTable();
