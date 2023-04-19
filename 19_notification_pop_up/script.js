const popupContainer = document.querySelector('.popup-container');
const popup = document.querySelector('.popup');
const greeting = document.getElementById('greeting');
const closeBtn = document.querySelector('.close-btn');

// get current hour
const currentHour = new Date().getHours();

// set greeting message based on current hour
if (currentHour >= 5 && currentHour < 12) {
  greeting.innerText = 'Good morning!';
} else if (currentHour >= 12 && currentHour < 18) {
  greeting.innerText = 'Good afternoon!';
} else {
  greeting.innerText = 'Good evening!';
}

// display popup and add click event listener to close button
popupContainer.style.display = 'flex';
closeBtn.addEventListener('click', () => {
  popupContainer.style.display = 'none';
});
