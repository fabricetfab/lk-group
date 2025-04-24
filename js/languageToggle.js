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
    techSolutionsTitle: '<h2 id="techSolutionsTitle" class="about-tech-solutions">Tech Solutions <span>></span><span>></span><span>></span></h2>',
    knowUsTitle: '<h1 class="about-header" id="knowusText">GET TO <span>KNOW</span> US !</h1>',
    WeOffer: '<h1 class="services-header" id="WeOffer">WHAT WE <span>OFFER !</span></h1>',
    WeOfferTitle1: "HR Consulting",
    WeOfferText1: "Strategic HR solutions and talent acquisition services.",
    WeOfferTitle2: "Digital Presence",
    WeOfferText2: "Web design, social media management, and content creation services.",
    WeOfferTitle3: "Cyber Security",
    WeOfferText3: "Comprehensive security solutions and incident response services.",
    WeOfferTitle4: "IT Support",
    WeOfferText4: "24/7 remote assistance, ticketing system, and technical support.",
    WeOfferTitle5: "Staff & Management",
    WeOfferText5: "Web design, social media management, and content creation services.",
    WeOfferTitle6: "Job Opportunities",
    WeOfferText6: "You want a fine digital solver, here is the right place.",
    TestmonialHead: "TESTIMONIALS",
    TestimonialTitle: 'WHAT OUR <span>CLIENTS</span> SAY !',
    testimonialsH1: 'Strategic Growth Support',
    Testifier1: 'Emily W. - HR Manager',
    testimonialsLabel1: 'Working with LK GROUP has been a fantastic experience. Their HR consulting services helped us build a stronger brand and a more efficient team. They truly understand the importance of communication strategy and talent acquisition in driving business success.',
    
    testimonialsH2: 'Expert IT Solutions',
    Testifier2: 'James T. - CEO of Apex Solutions',
    testimonialsLabel2: 'Thanks to LK GROUP, our IT infrastructure is stronger and more secure than ever. Their cybersecurity solutions and reliable IT support have provided us with peace of mind, knowing our systems are in good hands. The team’s quick response and proactive solutions have been crucial to our business operations.',
    
    testimonialsH3: 'Unforgettable Services',
    Testifier3: 'Sarah M. - Marketing Director',
    testimonialsLabel3: 'LK GROUP\'s team transformed our digital presence. Their web design services exceeded expectations, creating a stunning and user-friendly site that has driven significant online engagement. Their approach to digital strategy truly sets them apart in this competitive space.',
    rating1: 'Happy customers',
    rating2: 'Active Customers',
    rating3: 'Customer Satisfaction Rate',
    BlogSection: 'BLOGS',
    WhatsNew: "Explore What's <span>new !</span>",
    seeMoreButton: 'See More',
    ContactSection: 'CONTACT US',
    ContactHead1: "LET'S <span>TALK !</span>",
    ContactHead2: 'Message <span>US !</span>',
    SendButton: 'Send',
    ContactHead3: '<span>We are</span> open for any Suggestion by any mean of <span>communication.</span>',
    placeholderName: 'Your Name',
    placeholderEmail: 'Your Email',
    placeholderLocation: 'Your Location',
    placeholderMessage: 'Type a message...',
    faqsSection: "FAQs",
    faqsHead: "<h1 class='faqs-header' id='faqsHead'>FREQUENTLY <span>ASKED </span>QUESTIONS !</h1>",
    WeProvide: "What industries does LK GROUP serve?",
    WeProvideText: "We serve a wide range of industries including finance, healthcare, education, retail, and technology. Our services are designed to cater to the unique needs of each sector, ensuring optimal results and business growth.",
    WeWork: "How do I get started with LK GROUP's services?",
    WeWorkText: "Simply contact us via our website or schedule a consultation. We will discuss your business needs, assess your challenges, and create a tailored plan to help you achieve your goals.",
    toReset: "Can LK GROUP assist with ongoing IT support and maintenance?",
    ToResetItem1: "Yes, we offer ongoing IT support and maintenance services to ensure that your systems run smoothly. This includes remote assistance, software and hardware updates, and proactive issue monitoring.",
    WhyUs: "What is the process for customizing a financial strategy for my business?",
    WhyUsText: "Our team of financial consultants works with you to understand your business goals, assess your current financial situation, and develop a personalized strategy to improve cash flow, reduce risks, and optimize profitability.",
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
    getStarted: "Commencer",
    aboutTitle: "À PROPOS",
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
    techSolutionsTitle: '<h2 id="techSolutionsTitle" class="about-tech-solutions">Solutions technologiques<span>></span><span>></span><span>></span></h2>',
    knowUsTitle: '<h1 class="about-header" id="knowusText">APPRENEZ À <span>CONNAÎTRE</span> NOUS !</h1>',
    WeOffer: '<h1 class="services-header" id="WeOffer">CE QUE NOUS <span>OFFRONS !</span></h1>',
    WeOfferTitle1: "Consultation RH",
    WeOfferText1: "Solutions stratégiques en ressources humaines et services d'acquisition de talents.",
    WeOfferTitle2: "Présence Numérique",
    WeOfferText2: "Conception de sites web, gestion des réseaux sociaux et création de contenu.",
    WeOfferTitle3: "Cybersécurité",
    WeOfferText3: "Solutions de sécurité complètes et services de réponse aux incidents.",
    WeOfferTitle4: "Support IT",
    WeOfferText4: "Assistance à distance 24/7, système de billetterie et support technique.",
    WeOfferTitle5: "Personnel & Gestion",
    WeOfferText5: "Conception de sites web, gestion des réseaux sociaux et création de contenu.",
    WeOfferTitle6: "Opportunités d'emploi",
    WeOfferText6: "Vous cherchez un excellent résolveur numérique, vous êtes au bon endroit.",
    TestmonialHead: "TÉMOIGNAGES",
    TestimonialTitle: 'CE QUE NOS <span>CLIENTS</span> DISENT !',
    testimonialsH1: 'Soutien à la Croissance Stratégique',
    Testifier1: 'Emily W. - Responsable RH',
    testimonialsLabel1: 'Travailler avec LK GROUP a été une expérience fantastique. Leurs services de conseil RH nous ont aidés à construire une marque plus forte et une équipe plus efficace. Ils comprennent vraiment l\'importance de la stratégie de communication et de l\'acquisition de talents pour réussir dans les affaires.',
    
    testimonialsH2: 'Solutions IT Experts',
    Testifier2: 'James T. - PDG d\'Apex Solutions',
    testimonialsLabel2: 'Grâce à LK GROUP, notre infrastructure IT est plus forte et plus sécurisée que jamais. Leurs solutions de cybersécurité et leur support IT fiable nous ont apporté la tranquillité d\'esprit, sachant que nos systèmes sont entre de bonnes mains. La réactivité de l’équipe et ses solutions proactives ont été essentielles pour nos opérations commerciales.',
    
    testimonialsH3: 'Services Inoubliables',
    Testifier3: 'Sarah M. - Directrice Marketing',
    testimonialsLabel3: 'L’équipe de LK GROUP a transformé notre présence numérique. Leurs services de conception de sites web ont dépassé nos attentes, créant un site magnifique et facile à utiliser, ce qui a généré un engagement important en ligne. Leur approche de la stratégie numérique les distingue vraiment dans cet espace concurrentiel.',
    rating1: 'Clients satisfaits',
    rating2: 'Clients actifs',
    rating3: 'Taux de satisfaction des clients',
    BlogSection: 'BLOGS',
    WhatsNew: "Explorez les <span>nouveautés !</span>",
    seeMoreButton: 'Voir Plus',
    ContactSection: 'CONTACTEZ-NOUS',
    ContactHead1: "DISCUTONS <span>!</span>",
    ContactHead2: 'Envoyez-nous un <span>message !</span>',
    SendButton: 'Envoyer',
    ContactHead3: '<span>Nous sommes</span> ouverts à toute suggestion par tout moyen de <span>communication.</span>',
    placeholderName: 'Votre Nom',
    placeholderEmail: 'Votre Email',
    placeholderLocation: 'Votre Localisation',
    placeholderMessage: 'Tapez un message...',
    faqsSection: "FAQ",
    faqsHead: "<h1 class='faqs-header' id='faqsHead'>QUESTIONS <span>FRÉQUEMMENT</span> POSÉES !</h1>",
    WeProvide: "Quels secteurs d'activité LK GROUP dessert-elle ?",
    WeProvideText: "Nous servons une large gamme de secteurs, notamment la finance, la santé, l'éducation, le commerce de détail et la technologie. Nos services sont conçus pour répondre aux besoins spécifiques de chaque secteur, garantissant ainsi des résultats optimaux et la croissance de votre entreprise.",
    WeWork: "Comment puis-je commencer avec les services de LK GROUP ?",
    WeWorkText: "Il vous suffit de nous contacter via notre site internet ou de planifier une consultation. Nous discuterons de vos besoins commerciaux, évaluerons vos défis et élaborerons un plan sur mesure pour vous aider à atteindre vos objectifs.",
    toReset: "LK GROUP peut-il fournir une assistance et une maintenance informatique continue ?",
    ToResetItem1: "Oui, nous proposons des services de support et de maintenance informatique continus pour garantir le bon fonctionnement de vos systèmes. Cela inclut l'assistance à distance, les mises à jour logicielles et matérielles, ainsi que la surveillance proactive des problèmes.",
    WhyUs: "Quel est le processus pour personnaliser une stratégie financière pour mon entreprise ?",
    WhyUsText: "Notre équipe de consultants financiers travaille avec vous pour comprendre vos objectifs commerciaux, évaluer votre situation financière actuelle et élaborer une stratégie personnalisée visant à améliorer la trésorerie, réduire les risques et optimiser la rentabilité.",
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
    ChooseUsSection: "Pourquoi nous choisir ?",
    ChooseUsli1: "<span>Solutions complètes :</span> Nous offrons une gamme complète de services, y compris la présence numérique, la cybersécurité, le support informatique et la consultation en communication et RH.",
    ChooseUsli2: "<span>Services sur mesure :</span> Nos solutions sont personnalisées pour répondre aux défis et objectifs spécifiques de chaque client.",
    ChooseUsli3: "<span>Équipe expérimentée :</span> Avec plus d'une décennie d'expérience, notre équipe combine expertise technique et solutions axées sur les résultats.",
    ChooseUsli4: "<span>Approche centrée sur le client :</span> Nous privilégions la satisfaction du client en offrant un support personnalisé.",
    ChooseUsli5: "<span>Engagement envers l'innovation :</span> Nous restons à la pointe des nouvelles technologies et tendances."


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
  document.getElementById("knowUsTitle").innerHTML = translations[currentLanguage].knowUsTitle;

  // we offer section
  document.getElementById("WeOffer").innerHTML = translations[currentLanguage].WeOffer;
  document.getElementById("OfferTitle1").innerHTML = translations[currentLanguage].WeOfferTitle1;
  document.getElementById("OfferText1").innerHTML = translations[currentLanguage].WeOfferText1;

  document.getElementById("OfferTitle2").innerHTML = translations[currentLanguage].WeOfferTitle2;
  document.getElementById("OfferText2").innerHTML = translations[currentLanguage].WeOfferText2;

  document.getElementById("OfferTitle3").innerHTML = translations[currentLanguage].WeOfferTitle3;
  document.getElementById("OfferText3").innerHTML = translations[currentLanguage].WeOfferText3;


  // Testimonials section 
  document.getElementById("TestmonialHead").innerHTML = translations[currentLanguage].TestmonialHead;
  document.getElementById("TestimonialTitle").innerHTML = translations[currentLanguage].TestimonialTitle;
  document.getElementById("testimonialsH1").innerHTML = translations[currentLanguage].testimonialsH1;
  document.getElementById("Testifier1").innerHTML = translations[currentLanguage].Testifier1;
  document.getElementById("testimonialsLabel1").innerHTML = translations[currentLanguage].testimonialsLabel1;

  document.getElementById("testimonialsH2").innerHTML = translations[currentLanguage].testimonialsH2;
  document.getElementById("Testifier2").innerHTML = translations[currentLanguage].Testifier2;
  document.getElementById("testimonialsLabel2").innerHTML = translations[currentLanguage].testimonialsLabel2;

  document.getElementById("testimonialsH3").innerHTML = translations[currentLanguage].testimonialsH3;
  document.getElementById("Testifier3").innerHTML = translations[currentLanguage].Testifier3;
  document.getElementById("testimonialsLabel3").innerHTML = translations[currentLanguage].testimonialsLabel3;
  document.getElementById("rating1").innerHTML = translations[currentLanguage].rating1;
  document.getElementById("rating2").innerHTML = translations[currentLanguage].rating2;
  document.getElementById("rating3").innerHTML = translations[currentLanguage].rating3;

  // Blogs Section
  document.getElementById("BlogSection").innerHTML = translations[currentLanguage].BlogSection;
  document.getElementById("WhatsNew").innerHTML = translations[currentLanguage].WhatsNew;
  document.getElementById("seeMoreButton").innerHTML = translations[currentLanguage].seeMoreButton;

  // Contact Us Section
  document.getElementById("ContactSection").innerHTML = translations[currentLanguage].ContactSection;
  document.getElementById("ContactHead1").innerHTML = translations[currentLanguage].ContactHead1;
  document.getElementById("ContactHead2").innerHTML = translations[currentLanguage].ContactHead2;
  document.getElementById("SendButton").innerHTML = translations[currentLanguage].SendButton;
  document.getElementById("ContactHead3").innerHTML = translations[currentLanguage].ContactHead3;

   
  // Why Choose Us Section
  document.getElementById("ChooseUsSection").innerHTML = translations[currentLanguage].ChooseUsSection;
  document.getElementById("ChooseUsli1").innerHTML = translations[currentLanguage].ChooseUsli1;
  document.getElementById("ChooseUsli2").innerHTML = translations[currentLanguage].ChooseUsli2;
  document.getElementById("ChooseUsli3").innerHTML = translations[currentLanguage].ChooseUsli3;
  document.getElementById("ChooseUsli4").innerHTML = translations[currentLanguage].ChooseUsli4;
  document.getElementById("ChooseUsli5").innerHTML = translations[currentLanguage].ChooseUsli5;
  

  //Faqs Section

  document.getElementById("faqsSection").innerHTML = translations[currentLanguage].faqsSection;
  document.getElementById("faqsHead").innerHTML = translations[currentLanguage].faqsHead;
  document.getElementById("WeProvide").innerHTML = translations[currentLanguage].WeProvide;
  document.getElementById("WeProvideText").innerHTML = translations[currentLanguage].WeProvideText;
  document.getElementById("WeWork").innerHTML = translations[currentLanguage].WeWork;
  document.getElementById("WeWorkText").innerHTML = translations[currentLanguage].WeWorkText;
  document.getElementById("toReset").innerHTML = translations[currentLanguage].toReset;
  document.getElementById("ToResetItem1").innerHTML = translations[currentLanguage].ToResetItem1;
  document.getElementById("WhyUs").innerHTML = translations[currentLanguage].WhyUs;
  document.getElementById("WhyUsText").innerHTML = translations[currentLanguage].WhyUsText;

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

  document.querySelector("input[placeholder='Your Name']").setAttribute("placeholder", translations[currentLanguage].placeholderName);
  document.querySelector("input[placeholder='Your Email']").setAttribute("placeholder", translations[currentLanguage].placeholderEmail);
  document.querySelector("input[placeholder='Your Location']").setAttribute("placeholder", translations[currentLanguage].placeholderLocation);
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
  document.getElementById("knowUsTitle").innerHTML = translations[currentLanguage].knowUsTitle;

  // we offer section
  document.getElementById("WeOffer").innerHTML = translations[currentLanguage].WeOffer;
  document.getElementById("OfferTitle1").innerHTML = translations[currentLanguage].WeOfferTitle1;
  document.getElementById("OfferText1").innerHTML = translations[currentLanguage].WeOfferText1;

  document.getElementById("OfferTitle2").innerHTML = translations[currentLanguage].WeOfferTitle2;
  document.getElementById("OfferText2").innerHTML = translations[currentLanguage].WeOfferText2;

  document.getElementById("OfferTitle3").innerHTML = translations[currentLanguage].WeOfferTitle3;
  document.getElementById("OfferText3").innerHTML = translations[currentLanguage].WeOfferText3;


  // testiomials section
  document.getElementById("TestmonialHead").innerHTML = translations[currentLanguage].TestmonialHead;
  document.getElementById("TestimonialTitle").innerHTML = translations[currentLanguage].TestimonialTitle;
  document.getElementById("testimonialsH1").innerHTML = translations[currentLanguage].testimonialsH1;
  document.getElementById("Testifier1").innerHTML = translations[currentLanguage].Testifier1;
  document.getElementById("testimonialsLabel1").innerHTML = translations[currentLanguage].testimonialsLabel1;

  document.getElementById("testimonialsH2").innerHTML = translations[currentLanguage].testimonialsH2;
  document.getElementById("Testifier2").innerHTML = translations[currentLanguage].Testifier2;
  document.getElementById("testimonialsLabel2").innerHTML = translations[currentLanguage].testimonialsLabel2;

  document.getElementById("testimonialsH3").innerHTML = translations[currentLanguage].testimonialsH3;
  document.getElementById("Testifier3").innerHTML = translations[currentLanguage].Testifier3;
  document.getElementById("testimonialsLabel3").innerHTML = translations[currentLanguage].testimonialsLabel3;
  document.getElementById("rating1").innerHTML = translations[currentLanguage].rating1;
  document.getElementById("rating2").innerHTML = translations[currentLanguage].rating2;
  document.getElementById("rating3").innerHTML = translations[currentLanguage].rating3;

    // Blogs Section
    document.getElementById("BlogSection").innerHTML = translations[currentLanguage].BlogSection;
    document.getElementById("WhatsNew").innerHTML = translations[currentLanguage].WhatsNew;
    document.getElementById("seeMoreButton").innerHTML = translations[currentLanguage].seeMoreButton;

      // Contact Us Section
    document.getElementById("ContactSection").innerHTML = translations[currentLanguage].ContactSection;
    document.getElementById("ContactHead1").innerHTML = translations[currentLanguage].ContactHead1;
    document.getElementById("ContactHead2").innerHTML = translations[currentLanguage].ContactHead2;
    document.getElementById("SendButton").innerHTML = translations[currentLanguage].SendButton;
    document.getElementById("ContactHead3").innerHTML = translations[currentLanguage].ContactHead3;

    // why choose us section
    document.getElementById("ChooseUsSection").innerHTML = translations[currentLanguage].ChooseUsSection;
    document.getElementById("ChooseUsli1").innerHTML = translations[currentLanguage].ChooseUsli1;
    document.getElementById("ChooseUsli2").innerHTML = translations[currentLanguage].ChooseUsli2;
    document.getElementById("ChooseUsli3").innerHTML = translations[currentLanguage].ChooseUsli3;
    document.getElementById("ChooseUsli4").innerHTML = translations[currentLanguage].ChooseUsli4;
    document.getElementById("ChooseUsli5").innerHTML = translations[currentLanguage].ChooseUsli5;
    
    
      //Faqs Section

    document.getElementById("faqsSection").innerHTML = translations[currentLanguage].faqsSection;
    document.getElementById("faqsHead").innerHTML = translations[currentLanguage].faqsHead;
    document.getElementById("WeProvide").innerHTML = translations[currentLanguage].WeProvide;
    document.getElementById("WeProvideText").innerHTML = translations[currentLanguage].WeProvideText;
    document.getElementById("WeWork").innerHTML = translations[currentLanguage].WeWork;
    document.getElementById("WeWorkText").innerHTML = translations[currentLanguage].WeWorkText;
    document.getElementById("toReset").innerHTML = translations[currentLanguage].toReset;
    document.getElementById("ToResetItem1").innerHTML = translations[currentLanguage].ToResetItem1;
    document.getElementById("WhyUs").innerHTML = translations[currentLanguage].WhyUs;
    document.getElementById("WhyUsText").innerHTML = translations[currentLanguage].WhyUsText;

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

  document.querySelector("input[placeholder='Your Name']").setAttribute("placeholder", translations[currentLanguage].placeholderName);
  document.querySelector("input[placeholder='Your Email']").setAttribute("placeholder", translations[currentLanguage].placeholderEmail);
  document.querySelector("input[placeholder='Your Location']").setAttribute("placeholder", translations[currentLanguage].placeholderLocation);
  document.querySelector("textarea[placeholder='Type a message...']").setAttribute("placeholder", translations[currentLanguage].placeholderMessage);


  


});
