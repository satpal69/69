// script.js
function validateForm() {
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var organization = document.getElementById("organization").value;
    var hobbies = document.getElementById("hobbies").value;

    // Check if all required fields are filled in
    if (firstName === "" || lastName === "" || organization === "" || hobbies === "") {
        alert("Please fill in all required fields.");
        return false;
    }
    if (!/^[a-zA-Z]+$/.test(firstName) || !/^[a-zA-Z]+$/.test(lastName)) {
        resultDiv.innerHTML = "Name and Lastname should only contain letters.";
        return false;
    }

    // Add more validation checks if needed

    // If all validation checks pass, display the form details
    var output = document.getElementById("output");
    output.innerHTML = "<h2>Form Details</h2>" +
        "<p><strong>First Name:</strong> " + firstName + "</p>" +
        "<p><strong>Last Name:</strong> " + lastName + "</p>" +
        "<p><strong>Organization:</strong> " + organization + "</p>" +
        "<p><strong>Hobbies:</strong> " + hobbies + "</p>";

    // Prevent form submission
    return false;
}