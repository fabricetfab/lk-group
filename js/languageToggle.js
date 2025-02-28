// languageToggle.js

let currentLanguage = localStorage.getItem('language') || 'en'; // Load the saved language or default to 'en'

// Define translations for both languages
const translations = {
  en: {
    home: "Home",
    services: "Services",
    about: "About Us",
    contact: "Contact Us",
    getStarted: "Get Started",
    aboutTitle: "ABOUT US",
    aboutText: "At LK Group we offer cutting-edge solutions to address pressing challenges. Our focus on research and innovation leads to sustainable practices that benefit communities globally.",
  },
  fr: {
    home: "Accueil",
    services: "Services",
    about: "À Propos",
    contact: "Contactez-nous",
    getStarted: "Commencer",
    aboutTitle: "À PROPOS DE NOUS",
    aboutText: "Chez LK Group, nous proposons des solutions de pointe qui répondent aux défis urgents. Notre engagement envers la recherche et l'innovation conduit à des pratiques durables qui profitent aux communautés du monde entier.",
  }
};

// Toggle language function
function toggleLanguage() {
  currentLanguage = currentLanguage === 'en' ? 'fr' : 'en'; // Toggle between 'en' and 'fr'

  // Store the selected language in localStorage
  localStorage.setItem('language', currentLanguage);

  // Change the button text based on the current language
  document.getElementById('languageBtn').innerText = currentLanguage === 'en' ? 'Français' : 'English';

  // Update content based on the selected language
  document.getElementById("homeLink").innerHTML = translations[currentLanguage].home;
  document.getElementById("servicesLink").innerHTML = translations[currentLanguage].services;
  document.getElementById("aboutLink").innerHTML = translations[currentLanguage].about;
  document.getElementById("contactLink").innerHTML = translations[currentLanguage].contact;
  document.getElementById("getStartedBtn").innerHTML = translations[currentLanguage].getStarted;
  document.getElementById("aboutTitle").innerHTML = translations[currentLanguage].aboutTitle;
  document.getElementById("aboutText").innerHTML = translations[currentLanguage].aboutText;
}

// Set default language content on page load
document.addEventListener("DOMContentLoaded", () => {
  // Ensure that the correct language is set on page load
  document.getElementById('languageBtn').innerText = currentLanguage === 'en' ? 'Français' : 'English';
  // Update content based on the saved language
  document.getElementById("homeLink").innerHTML = translations[currentLanguage].home;
  document.getElementById("servicesLink").innerHTML = translations[currentLanguage].services;
  document.getElementById("aboutLink").innerHTML = translations[currentLanguage].about;
  document.getElementById("contactLink").innerHTML = translations[currentLanguage].contact;
  document.getElementById("getStartedBtn").innerHTML = translations[currentLanguage].getStarted;
  document.getElementById("aboutTitle").innerHTML = translations[currentLanguage].aboutTitle;
  document.getElementById("aboutText").innerHTML = translations[currentLanguage].aboutText;
});
