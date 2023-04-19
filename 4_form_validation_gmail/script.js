const form = document.getElementById("registration-form");
const firstNameInput = document.getElementById("first-name");
const lastNameInput = document.getElementById("last-name");
const usernameInput = document.getElementById("username");
const passwordInput = document.getElementById("password");
const confirmPasswordInput = document.getElementById("confirm-password");

function showError(input, message) {
	const formControl = input.parentElement;
	formControl.classList.add("error");
	const errorElement = formControl.querySelector("small");
	errorElement.innerText = message;
}

function showSuccess(input) {
	const formControl = input.parentElement;
	formControl.classList.remove("error");
}

function checkPasswordInputs(passwordInput, confirmPasswordInput) {
	if (passwordInput.value !== confirmPasswordInput.value) {
		showError(confirmPasswordInput, "Passwords do not match");
		return false;
	} else {
		showSuccess(confirmPasswordInput);
		return true;
	}
}

form.addEventListener("submit", function (event) {
	event.preventDefault();
	if (checkPasswordInputs(passwordInput, confirmPasswordInput)) {
		alert("Registration successful!");
		form.submit();
	}
});
