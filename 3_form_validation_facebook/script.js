const form = document.getElementById("registration-form");
const firstNameInput = document.getElementById("first-name");
const lastNameInput = document.getElementById("last-name");
const emailInput = document.getElementById("email");
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

function checkRequiredInputs(inputs) {
	let isAllValid = true;
	inputs.forEach((input) => {
		if (input.value.trim() === "") {
			showError(input, `${input.name} is required`);
			isAllValid = false;
		} else {
			showSuccess(input);
		}
	});
	return isAllValid;
}

function checkEmailInput(input) {
	const regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!regex.test(input.value.trim())) {
		showError(input, "Email is not valid");
        return false;
        } else {
        showSuccess(input);
        return true;
        }
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
        if (
        checkRequiredInputs([firstNameInput, lastNameInput, emailInput, passwordInput, confirmPasswordInput]) &&
        checkEmailInput(emailInput) &&
        checkPasswordInputs(passwordInput, confirmPasswordInput)
        ) {
        alert("Registration successful!");
        }
        });

