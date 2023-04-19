const form = document.getElementById('signup-form');
const welcomeMessage = document.getElementById('welcome-message');

form.addEventListener('submit', (event) => {
  event.preventDefault();

  const name = form.elements.name.value;
  const username = form.elements.username.value;

  // Show welcome message
  welcomeMessage.textContent = `Welcome ${name}!`;
  welcomeMessage.classList.remove('hidden');
  
  // Clear form fields
  form.reset();
});
function validateForm() {
  const name = document.getElementById("name").value.trim();
  const username = document.getElementById("username").value.trim();
  const email = document.getElementById("email").value.trim();
  const password = document.getElementById("password").value;

  // Check if any field is empty
  if (!name || !username || !email || !password) {
    const errorMessage = "Please fill out all fields";
    document.getElementById("error-message").textContent = errorMessage;
    return false;
  }

  // Check if password is at least 8 characters
  if (password.length < 8) {
    const errorMessage = "Password must be at least 8 characters";
    document.getElementById("error-message").textContent = errorMessage;
    return false;
  }

  // Check if email is valid
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    const errorMessage = "Email is not valid";
    document.getElementById("error-message").textContent = errorMessage;
    return false;
  }

  // Display welcome message with name
  const welcomeMessage = `Welcome, ${name}!`;
  document.getElementById("welcome-message").textContent = welcomeMessage;

  return true;
}
