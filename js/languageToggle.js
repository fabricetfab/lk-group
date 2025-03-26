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
    carouselTitle1: "HR & Communication",
    carouselText1: "Tailored solutions for modern businesses to thrive in a fast-paced digital world.",
    carouselTitle2: "Your Growth, Our Mission",
    carouselText2: "Transforming challenges into opportunities with customized services for your business.",
    carouselTitle3: "Innovative Solutions for Modern Businesses",
    carouselText3: "Helping organizations unlock their full potential in today’s digital landscape.",
    serviceOneText1: "Digital Presence in",
    serviceOneTitle1: "Social Media",
    serviceOneText2: "Cybersecurity in",
    serviceOneTitle2: "Assessment",
    serviceOneText3: "IT Support in",
    serviceOneTitle3: "Remote Updates",
    serviceTwoText1: "Digital Presence in",
    serviceTwoTitle1: "Web Design",
    serviceTwoText2: "Cybersecurity in",
    serviceTwoTitle2: "Incidents Response",
    serviceTwoText3: "IT Support in",
    serviceTwoTitle3: "Interventions Reporting",
    serviceThreeText1: "Digital Presence in",
    serviceThreeTitle1: "Contents Creation",
    serviceThreeText2: "Cybersecurity in",
    serviceThreeTitle2: "Solutions",
    serviceThreeText3: "IT Support in",
    serviceThreeTitle3: "Ticketing",
    ticketsDeliveredText: "Tickets Delivered This Month",
    activeCustomersText: "Active Customers Rate",
    customerSatisfactionText: "Customer Satisfaction Rate",
    aboutParagraph: "Innovate with confidence! Explore the future of IT infrastructure and how we lead the way with cutting edge solutions.",
    learnMoreBtn: "Learn more",
    techSolutionsTitle: '<h2 id="techSolutionsTitle" class="about-tech-solutions">Tech Solutions <span>></span><span>></span><span>></span></h2>'
  },
  fr: {
    home: "Accueil",
    services: "Services",
    about: "À Propos",
    contact: "Contactez-nous",
    getStarted: "Commencer",
    aboutTitle: "À PROPOS DE NOUS",
    aboutText: "Chez LK Group, nous proposons des solutions de pointe qui répondent aux défis urgents. Notre engagement envers la recherche et l'innovation conduit à des pratiques durables qui profitent aux communautés du monde entier.",
    carouselTitle1: "Ressources Humaines et Communication",
    carouselText1: "Des solutions sur mesure pour permettre aux entreprises modernes de prospérer dans un monde numérique en constante évolution.",
    carouselTitle2: "Votre Croissance, Notre Mission",
    carouselText2: "Transformer les défis en opportunités avec des services personnalisés pour votre entreprise.",
    carouselTitle3: "Des Solutions Innovantes pour les Entreprises Modernes",
    carouselText3: "Aider les organisations à libérer leur plein potentiel dans le paysage numérique d'aujourd'hui.",
    serviceOneText1: "Présence numérique dans",
    serviceOneTitle1: "Réseaux sociaux",
    serviceOneText2: "Cybersécurité dans",
    serviceOneTitle2: "Évaluation",
    serviceOneText3: "Support IT dans",
    serviceOneTitle3: "Mises à jour à distance",
    serviceTwoText1: "Présence numérique dans",
    serviceTwoTitle1: "Conception Web",
    serviceTwoText2: "Cybersécurité dans",
    serviceTwoTitle2: "Réponse aux incidents",
    serviceTwoText3: "Support IT dans",
    serviceTwoTitle3: "Rapport d'interventions",
    serviceThreeText1: "Présence numérique dans",
    serviceThreeTitle1: "Création de contenus",
    serviceThreeText2: "Cybersécurité dans",
    serviceThreeTitle2: "Solutions",
    serviceThreeText3: "Support IT dans",
    serviceThreeTitle3: "Gestion des tickets",
    ticketsDeliveredText: "Tickets livrés ce mois-ci",
    activeCustomersText: "Taux de clients actifs",
    customerSatisfactionText: "Taux de satisfaction des clients",
    aboutParagraph: "Innover avec confiance ! Explorez l'avenir de l'infrastructure informatique et comment nous ouvrons la voie avec des solutions de pointe.",
    learnMoreBtn: "En savoir plus",
    techSolutionsTitle: '<h2 id="techSolutionsTitle" class="about-tech-solutions">Solutions technologiques<span>></span><span>></span><span>></span></h2>'
  }
};

// Toggle language function
function toggleLanguage() {
  currentLanguage = currentLanguage === 'en' ? 'fr' : 'en'; // Toggle between 'en' and 'fr'

  // Store the selected language in localStorage
  localStorage.setItem('language', currentLanguage);

  // Change the button text based on the current language
  document.getElementById('languageBtn').innerText = currentLanguage === 'en' ? 'Fr' : 'En';

  // Update content based on the selected language
  document.getElementById("homeLink").innerHTML = translations[currentLanguage].home;
  document.getElementById("servicesLink").innerHTML = translations[currentLanguage].services;
  document.getElementById("aboutLink").innerHTML = translations[currentLanguage].about;
  document.getElementById("contactLink").innerHTML = translations[currentLanguage].contact;
  document.getElementById("getStartedBtn").innerHTML = translations[currentLanguage].getStarted;
  document.getElementById("aboutTitle").innerHTML = translations[currentLanguage].aboutTitle;
  document.getElementById("aboutText").innerHTML = translations[currentLanguage].aboutText;

  // Update carousel content based on the selected language
  document.getElementById("carouselTitle1").innerHTML = translations[currentLanguage].carouselTitle1;
  document.getElementById("carouselText1").innerHTML = translations[currentLanguage].carouselText1;
  document.getElementById("carouselTitle2").innerHTML = translations[currentLanguage].carouselTitle2;
  document.getElementById("carouselText2").innerHTML = translations[currentLanguage].carouselText2;
  document.getElementById("carouselTitle3").innerHTML = translations[currentLanguage].carouselTitle3;
  document.getElementById("carouselText3").innerHTML = translations[currentLanguage].carouselText3;

  // Update floating services content based on the selected language
  document.getElementById("serviceOneText1").innerHTML = translations[currentLanguage].serviceOneText1;
  document.getElementById("serviceOneTitle1").innerHTML = translations[currentLanguage].serviceOneTitle1;
  document.getElementById("serviceOneText2").innerHTML = translations[currentLanguage].serviceOneText2;
  document.getElementById("serviceOneTitle2").innerHTML = translations[currentLanguage].serviceOneTitle2;
  document.getElementById("serviceOneText3").innerHTML = translations[currentLanguage].serviceOneText3;
  document.getElementById("serviceOneTitle3").innerHTML = translations[currentLanguage].serviceOneTitle3;

  document.getElementById("serviceTwoText1").innerHTML = translations[currentLanguage].serviceTwoText1;
  document.getElementById("serviceTwoTitle1").innerHTML = translations[currentLanguage].serviceTwoTitle1;
  document.getElementById("serviceTwoText2").innerHTML = translations[currentLanguage].serviceTwoText2;
  document.getElementById("serviceTwoTitle2").innerHTML = translations[currentLanguage].serviceTwoTitle2;
  document.getElementById("serviceTwoText3").innerHTML = translations[currentLanguage].serviceTwoText3;
  document.getElementById("serviceTwoTitle3").innerHTML = translations[currentLanguage].serviceTwoTitle3;

  document.getElementById("serviceThreeText1").innerHTML = translations[currentLanguage].serviceThreeText1;
  document.getElementById("serviceThreeTitle1").innerHTML = translations[currentLanguage].serviceThreeTitle1;
  document.getElementById("serviceThreeText2").innerHTML = translations[currentLanguage].serviceThreeText2;
  document.getElementById("serviceThreeTitle2").innerHTML = translations[currentLanguage].serviceThreeTitle2;
  document.getElementById("serviceThreeText3").innerHTML = translations[currentLanguage].serviceThreeText3;
  document.getElementById("serviceThreeTitle3").innerHTML = translations[currentLanguage].serviceThreeTitle3;

  // Update footer stats
  document.getElementById("ticketsDeliveredText").innerHTML = translations[currentLanguage].ticketsDeliveredText;
  document.getElementById("activeCustomersText").innerHTML = translations[currentLanguage].activeCustomersText;
  document.getElementById("customerSatisfactionText").innerHTML = translations[currentLanguage].customerSatisfactionText;

  // Update about paragraph and button
  document.getElementById("aboutParagraph").innerHTML = translations[currentLanguage].aboutParagraph;
  document.getElementById("learnMoreBtn").innerHTML = translations[currentLanguage].learnMoreBtn;

  // Update Tech Solutions title
  document.getElementById("techSolutionsTitle").innerHTML = translations[currentLanguage].techSolutionsTitle;
}

// Set default language content on page load
document.addEventListener("DOMContentLoaded", () => {
  // Ensure that the correct language is set on page load
  document.getElementById('languageBtn').innerText = currentLanguage === 'en' ? 'Fr' : 'En';

  // Update content based on the saved language
  document.getElementById("homeLink").innerHTML = translations[currentLanguage].home;
  document.getElementById("servicesLink").innerHTML = translations[currentLanguage].services;
  document.getElementById("aboutLink").innerHTML = translations[currentLanguage].about;
  document.getElementById("contactLink").innerHTML = translations[currentLanguage].contact;
  document.getElementById("getStartedBtn").innerHTML = translations[currentLanguage].getStarted;
  document.getElementById("aboutTitle").innerHTML = translations[currentLanguage].aboutTitle;
  document.getElementById("aboutText").innerHTML = translations[currentLanguage].aboutText;

  // Update carousel content based on the saved language
  document.getElementById("carouselTitle1").innerHTML = translations[currentLanguage].carouselTitle1;
  document.getElementById("carouselText1").innerHTML = translations[currentLanguage].carouselText1;
  document.getElementById("carouselTitle2").innerHTML = translations[currentLanguage].carouselTitle2;
  document.getElementById("carouselText2").innerHTML = translations[currentLanguage].carouselText2;
  document.getElementById("carouselTitle3").innerHTML = translations[currentLanguage].carouselTitle3;
  document.getElementById("carouselText3").innerHTML = translations[currentLanguage].carouselText3;

  // Update footer stats
  document.getElementById("ticketsDeliveredText").innerHTML = translations[currentLanguage].ticketsDeliveredText;
  document.getElementById("activeCustomersText").innerHTML = translations[currentLanguage].activeCustomersText;
  document.getElementById("customerSatisfactionText").innerHTML = translations[currentLanguage].customerSatisfactionText;

  // Update about paragraph and button
  document.getElementById("aboutParagraph").innerHTML = translations[currentLanguage].aboutParagraph;
  document.getElementById("learnMoreBtn").innerHTML = translations[currentLanguage].learnMoreBtn;

  // Update Tech Solutions title
  document.getElementById("techSolutionsTitle").innerHTML = translations[currentLanguage].techSolutionsTitle;
});
