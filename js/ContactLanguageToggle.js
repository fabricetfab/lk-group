let currentLanguage = localStorage.getItem('language') || 'en'; // Load the saved language or default to 'en'

// Define translations for both languages
const translations = {
  en: {
    home: "Home",
    services: "Services",
    about: "About Us",
    contact: "Contact Us",
    HeaderMobile1: "Home",
    HeaderMobile2: "Services",
    HeaderMobile3: "About Us",
    HeaderMobile4: "Contact Us",
    ContactTitle: "CONTACT <span>US</span>",
    ContactText: "“We understand that success in the digital world requires a holistic approach so Lk group is a Multifaceted Approach to Business Growth”",
    ContactHead2: 'Message <span>US !</span>',
    SendButton: 'Send',
    ContactHead3: '<span>We are</span> open for any Suggestion by any mean of <span>communication.</span>',
    placeholderName: 'Your Name',
    placeholderEmail: 'Your Email',
    placeholderLocation: 'Your Location',
    placeholderMessage: 'Type a message...',
    FromYOu: "We’d Love to Hear from You!",
    WeAreHere: "we're here to help! Our team at LK GROUP is just a message away. Fill out the form below, and let's connect to make your vision a reality.",
    NextStep: "Your next step toward growth starts here—let's chat!",

    WeAreOpen: "<span>We are</span> open for any Suggestion by any mean of <span>communication.</span>",

    ContactHead2: "Message <span>US !</span>",

    name: "Name",
    email: "Email",
    subject: "Subject",
    service: "Service",
    message: "Message",

    SendButton: "Send",
    footerH4: "LK GROUP",
    footerMenu1: "Resources",
    footerMenuLink1: "Home",
    footerMenuLink2: "Services",
    footerMenuLink3: "About",
    footerMenuLink4: "Contact Us",
    footerMenu2: "Support",
    footerMenuLink5: "FAQs",
    footerMenuLink6: "Help",
    footerMenu3: "Company",
    footerMenuLink7: "Our Mission",
    footerMenuLink8: "Our Objective",
    footerMenuLink9: "Our Values",
    footerMenuLink10: "Our Team",
    footerMenu4: "Useful Links",
    footerMenuLink11: "How we work",
    footerMenuLink12: "What we do",
    footerMenu5: "Social",
    ChooseUsSection: "Why Choose Us?",
    ChooseUsli1: "<span>Comprehensive Solutions:</span> We offer a full range of services including digital presence, cybersecurity, IT support, and communication & HR consulting.",
    ChooseUsli2: "<span>Tailored Services:</span> Our solutions are customized to meet the specific challenges and goals of each client.",
    ChooseUsli3: "<span>Experienced Team:</span> With over a decade of experience, our team combines technical expertise, results-driven solutions.",
    ChooseUsli4: "<span>Customer-Centric Approach:</span> We prioritize client satisfaction by offering personalized support.",
    ChooseUsli5: "<span>Commitment to Innovation:</span> We stay at the forefront of new technologies and trends."

 

  },
  fr: {
    home: "Accueil",
    services: "Services",
    about: "À Propos",
    contact: "Contactez-nous",
    HeaderMobile1: "Accueil",
    HeaderMobile2: "Services",
    HeaderMobile3: "À propos",
    HeaderMobile4: "Contactez-nous",
    ContactTitle: "CONTACT",
    ContactText: "“Nous comprenons que la réussite dans le monde numérique nécessite une approche holistique, c'est pourquoi LK group adopte une approche multifacette pour la croissance des entreprises”",
    ContactHead2: 'Envoyez-nous un <span>message !</span>',
    ContactHead3: '<span>Nous sommes</span> ouverts à toute suggestion par tout moyen de <span>communication.</span>',
    placeholderName: 'Nom',
    placeholderEmail: 'Email',
    placeholderLocation: 'Sujet',
    placeholderMessage: 'Tapez un message...',
    FromYOu: "Nous aimerions avoir de vos nouvelles!",
    WeAreHere: "Nous sommes là pour vous aider! Notre équipe chez LK GROUP est à un message près. Remplissez le formulaire ci-dessous et connectons-nous pour concrétiser votre vision.",
    NextStep: "Votre prochaine étape vers la croissance commence ici—discutons!",

    WeAreOpen: "<span>Nous sommes</span> ouverts à toute suggestion par tout moyen de <span>communication.</span>",

    ContactHead2: "Envoyez-nous un <span>message !</span>",

    name: "Nom",
    email: "Email",
    subject: "Sujet",
    service: "Service",
    message: "Message",

    SendButton: "Envoyer",
    footerH4: "LK GROUP",
    footerMenu1: "Ressources",
    footerMenuLink1: "Accueil",
    footerMenuLink2: "Services",
    footerMenuLink3: "À propos",
    footerMenuLink4: "Contactez-nous",
    footerMenu2: "Assistance",
    footerMenuLink5: "FAQs",
    footerMenuLink6: "Aide",
    footerMenu3: "Entreprise",
    footerMenuLink7: "Notre Mission",
    footerMenuLink8: "Notre Objectif",
    footerMenuLink9: "Nos Valeurs",
    footerMenuLink10: "Notre Équipe",
    footerMenu4: "Liens Utiles",
    footerMenuLink11: "Comment nous travaillons",
    footerMenuLink12: "Ce que nous faisons",
    footerMenu5: "Social",



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
  document.getElementById("HeaderMobile1").innerHTML = translations[currentLanguage].HeaderMobile1;
  document.getElementById("HeaderMobile2").innerHTML = translations[currentLanguage].HeaderMobile2;
  document.getElementById("HeaderMobile3").innerHTML = translations[currentLanguage].HeaderMobile3;
  document.getElementById("HeaderMobile4").innerHTML = translations[currentLanguage].HeaderMobile4;
  document.getElementById("ContactTitle").innerHTML = translations[currentLanguage].ContactTitle;
  document.getElementById("ContactText").innerHTML = translations[currentLanguage].ContactText;
  document.getElementById("WeAreHere").innerHTML = translations[currentLanguage].WeAreHere;


  // Footer Section
  document.getElementById("footerH4").innerHTML = translations[currentLanguage].footerH4;
  document.getElementById("footerMenu1").innerHTML = translations[currentLanguage].footerMenu1;
  document.getElementById("footerMenuLink1").innerHTML = translations[currentLanguage].footerMenuLink1;
  document.getElementById("footerMenuLink2").innerHTML = translations[currentLanguage].footerMenuLink2;
  document.getElementById("footerMenuLink3").innerHTML = translations[currentLanguage].footerMenuLink3;
  document.getElementById("footerMenuLink4").innerHTML = translations[currentLanguage].footerMenuLink4;
  document.getElementById("footerMenu2").innerHTML = translations[currentLanguage].footerMenu2;
  document.getElementById("footerMenuLink5").innerHTML = translations[currentLanguage].footerMenuLink5;
  document.getElementById("footerMenuLink6").innerHTML = translations[currentLanguage].footerMenuLink6;
  document.getElementById("footerMenu3").innerHTML = translations[currentLanguage].footerMenu3;
  document.getElementById("footerMenuLink7").innerHTML = translations[currentLanguage].footerMenuLink7;
  document.getElementById("footerMenuLink8").innerHTML = translations[currentLanguage].footerMenuLink8;
  document.getElementById("footerMenuLink9").innerHTML = translations[currentLanguage].footerMenuLink9;
  document.getElementById("footerMenuLink10").innerHTML = translations[currentLanguage].footerMenuLink10;
  document.getElementById("footerMenu4").innerHTML = translations[currentLanguage].footerMenu4;
  document.getElementById("footerMenuLink11").innerHTML = translations[currentLanguage].footerMenuLink11;
  document.getElementById("footerMenuLink12").innerHTML = translations[currentLanguage].footerMenuLink12;
  document.getElementById("footerMenu5").innerHTML = translations[currentLanguage].footerMenu5;
  document.getElementById("FromYOu").innerHTML = translations[currentLanguage].FromYOu;
  document.getElementById("NextStep").innerHTML = translations[currentLanguage].NextStep;

  document.getElementById("WeAreOpen").innerHTML = translations[currentLanguage].WeAreOpen;

  document.getElementById("ContactHead2").innerHTML = translations[currentLanguage].ContactHead2;

  document.getElementById("name").innerHTML = translations[currentLanguage].name;
  document.getElementById("email").innerHTML = translations[currentLanguage].email;
  document.getElementById("subject").innerHTML = translations[currentLanguage].subject;

  document.getElementById("SendButton").innerHTML = translations[currentLanguage].SendButton;

  document.querySelector("input[placeholder='Name']").setAttribute("placeholder", translations[currentLanguage].placeholderName);
  document.querySelector("input[placeholder='Email']").setAttribute("placeholder", translations[currentLanguage].placeholderEmail);
  document.querySelector("input[placeholder='Subject']").setAttribute("placeholder", translations[currentLanguage].placeholderLocation);
  document.querySelector("textarea[placeholder='Type a message...']").setAttribute("placeholder", translations[currentLanguage].placeholderMessage);


  
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
  document.getElementById("HeaderMobile1").innerHTML = translations[currentLanguage].HeaderMobile1;
  document.getElementById("HeaderMobile2").innerHTML = translations[currentLanguage].HeaderMobile2;
  document.getElementById("HeaderMobile3").innerHTML = translations[currentLanguage].HeaderMobile3;
  document.getElementById("HeaderMobile4").innerHTML = translations[currentLanguage].HeaderMobile4;
  document.getElementById("ContactTitle").innerHTML = translations[currentLanguage].ContactTitle;
  document.getElementById("ContactText").innerHTML = translations[currentLanguage].ContactText;
  document.getElementById("WeAreHere").innerHTML = translations[currentLanguage].WeAreHere;



    // Footer Section
  document.getElementById("footerH4").innerHTML = translations[currentLanguage].footerH4;
  document.getElementById("footerMenu1").innerHTML = translations[currentLanguage].footerMenu1;
  document.getElementById("footerMenuLink1").innerHTML = translations[currentLanguage].footerMenuLink1;
  document.getElementById("footerMenuLink2").innerHTML = translations[currentLanguage].footerMenuLink2;
  document.getElementById("footerMenuLink3").innerHTML = translations[currentLanguage].footerMenuLink3;
  document.getElementById("footerMenuLink4").innerHTML = translations[currentLanguage].footerMenuLink4;
  document.getElementById("footerMenu2").innerHTML = translations[currentLanguage].footerMenu2;
  document.getElementById("footerMenuLink5").innerHTML = translations[currentLanguage].footerMenuLink5;
  document.getElementById("footerMenuLink6").innerHTML = translations[currentLanguage].footerMenuLink6;
  document.getElementById("footerMenu3").innerHTML = translations[currentLanguage].footerMenu3;
  document.getElementById("footerMenuLink7").innerHTML = translations[currentLanguage].footerMenuLink7;
  document.getElementById("footerMenuLink8").innerHTML = translations[currentLanguage].footerMenuLink8;
  document.getElementById("footerMenuLink9").innerHTML = translations[currentLanguage].footerMenuLink9;
  document.getElementById("footerMenuLink10").innerHTML = translations[currentLanguage].footerMenuLink10;
  document.getElementById("footerMenu4").innerHTML = translations[currentLanguage].footerMenu4;
  document.getElementById("footerMenuLink11").innerHTML = translations[currentLanguage].footerMenuLink11;
  document.getElementById("footerMenuLink12").innerHTML = translations[currentLanguage].footerMenuLink12;
  document.getElementById("footerMenu5").innerHTML = translations[currentLanguage].footerMenu5;
  document.getElementById("FromYOu").innerHTML = translations[currentLanguage].FromYOu;
  document.getElementById("NextStep").innerHTML = translations[currentLanguage].NextStep;

  document.getElementById("WeAreOpen").innerHTML = translations[currentLanguage].WeAreOpen;

  document.getElementById("ContactHead2").innerHTML = translations[currentLanguage].ContactHead2;

  document.getElementById("name").innerHTML = translations[currentLanguage].name;
  document.getElementById("email").innerHTML = translations[currentLanguage].email;
  document.getElementById("subject").innerHTML = translations[currentLanguage].subject;
  document.getElementById("SendButton").innerHTML = translations[currentLanguage].SendButton;


  document.querySelector("input[placeholder='Name']").setAttribute("placeholder", translations[currentLanguage].placeholderName);
  document.querySelector("input[placeholder='Email']").setAttribute("placeholder", translations[currentLanguage].placeholderEmail);
  document.querySelector("input[placeholder='Subject']").setAttribute("placeholder", translations[currentLanguage].placeholderLocation);
  document.querySelector("textarea[placeholder='Type a message...']").setAttribute("placeholder", translations[currentLanguage].placeholderMessage);


  


});
