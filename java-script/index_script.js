// Get references to the DOM elements
const viewButton = document.getElementById('viewButton'); // Get the "View" button
const popupCard = document.getElementById('popupCard'); // Get the pop-up card
const closePopup = document.getElementById('closePopup'); // Get the close button

// Open pop-up card when "View" button is clicked
viewButton.addEventListener('click', () => {
  popupCard.style.display = 'block'; // Show the pop-up card
});

// Close pop-up card when close button is clicked
closePopup.addEventListener('click', () => {
  popupCard.style.display = 'none'; // Hide the pop-up card
});

// Close pop-up card when clicking outside the card
window.addEventListener('click', (event) => {
  if (event.target === popupCard) {
    popupCard.style.display = 'none'; // Hide the pop-up card
  }
});

//Function for the toggle menu
function toggleMenu() {
    var navItems = document.getElementById("nav-items");
    
    // Toggle the "responsive" class on click
    if (navItems.className === "nav-items") {
        navItems.className += " responsive"; // Add responsive class
    } else {
        navItems.className = "nav-items"; // Remove responsive class
    }
}

// Scroll to specific sections of the page
function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    section.scrollIntoView({ behavior: 'smooth' });
}
