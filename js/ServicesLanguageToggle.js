let currentLanguage = localStorage.getItem('language') || 'en'; // Load the saved language or default to 'en'

// Define translations for both languages
const translations = {
  en: {
    home: "Home",
    services: "Services",
    ServicesText:"“We offer a comprehensive suite of services, tailored to address the specific challenges and opportunities faced by modern organizations.”",
    about: "About Us",
    contact: "Contact Us",
    HeaderMobile1: "Home",
    HeaderMobile2: "Services",
    HeaderMobile3: "About Us",
    HeaderMobile4: "Contact Us",
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
    footerMenu1: "Home",
    ServiceHeader1: "Digital Presence",
    ServiceSubHeader1: "Unleash your digital potential with a powerful online presence",
    ServiceP1: "\"In today’s competitive landscape, a strong online presence is essential for any business looking to grow and thrive. At LK GROUP, we offer a comprehensive suite of digital presence solutions designed to help you reach your target audience, build brand awareness, and achieve meaningful results.\"",
    ServiceList1: "<span>Web Design: </span>\"We create stunning and user-friendly websites that reflect your brand identity and engage your audience. From initial design to launch, we handle every aspect of the design process, ensuring a seamless and professional experience.\"",
    ServiceList2: "<span>Social Media Management: </span>\"We develop and implement engaging social media strategies to connect your business with your target audience on the platforms they use most. We create compelling content, manage your social accounts, and track your performance, ensuring that your brand gets seen and heard.\"",
    ServiceList3: "<span>Content Creation: </span>\"We create impactful content that educates, entertains, and inspires your audience. From blog posts and articles to website copy and social media captions, we provide high-quality content that resonates with your target market and drives engagement.\"",

    ServiceHeader2: "Cybersecurity",
    ServiceSubHeader2: "Protect your business from cyber threats",
    ServiceP2: "\"Cyber threats are becoming increasingly sophisticated and pervasive. At LK GROUP, we offer comprehensive cybersecurity solutions to protect your business’s data, systems, and reputation.\"",
    ServiceList5: "<span>Cybersecurity Assessment: </span>\"We conduct thorough cybersecurity assessments to identify potential vulnerabilities in your network, systems, and applications. Our experts provide a detailed report with recommendations for remediation and ongoing security improvements.\"",
    ServiceList6: "<span>Security Solutions: </span>\"We implement a range of security solutions tailored to your specific needs and risk profile, including firewall management, data encryption, intrusion detection, anti-malware protection, and phishing/spam email filtering.\"",
    ServiceList7: "<span>Incident Response: </span>\"In the event of a security breach, our team provides rapid, expert incident response services to minimize damage and restore your systems quickly. We also assist with post-incident analysis and remediation, helping you recover and prevent future attacks.\"",

    ServiceHeader3: "IT Support & Managed Services",
    ServiceSubHeader3: "Free your mind with reliable IT support",
    ServiceP3: "\"Focus on your business, not your IT infrastructure. LK GROUP provides comprehensive IT support and managed services to ensure your technology runs smoothly and efficiently.\"",
    ServiceList8: "<span>Remote Support: </span>\"Our experienced IT technicians provide fast and efficient remote support for all your hardware and software issues. We offer flexible support plans to meet your needs, from on-demand assistance to 24/7 coverage.\"",
    ServiceList9: "<span>Ticketing System: </span>\"Our secure ticketing system ensures clear communication and efficient issue tracking. Submit a ticket for support, track its progress, and receive real-time updates.\"",
    ServiceList10: "<span>Intervention Reports: </span>\"We maintain detailed records of all IT interventions, including dates, times, issues, resolutions, and durations. We provide comprehensive reports to give insights into IT performance and identify areas for improvement.\"",
    ServiceList11: "<span>User Training: </span>\"We offer tailored training programs to help your employees maximize their IT skills and efficiency. Our training covers a wide range of software, hardware, and cybersecurity best practices.\"",
    ServiceList12: "<span>Software & Hardware Updates: </span>\"We manage and implement software updates to ensure security and optimal performance. We also monitor hardware health and proactively address potential issues, preventing downtime and ensuring long-term reliability.\"",

    ServiceHeader4: "HR Consulting & Communications",
    ServiceSubHeader4: "Strengthen your brand and build a high-performing team",
    ServiceP4: "\"LK GROUP offers communication and HR consulting services to help you build a strong brand, engage your target audience, and cultivate a high-performing workplace environment.\"",
    ServiceList13: "<span>Communication Strategy: </span>\"We develop comprehensive communication strategies to ensure your messaging is consistent, impactful, and resonates with your target audience. We help you identify key messages, target audiences, and the best communication channels for your goals.\"",
    ServiceList14: "<span>Branding: </span>\"We create a strong brand identity that reflects your values, mission, and vision. We create a consistent brand experience across all your marketing materials, online presence, and internal communications.\"",
    ServiceList15: "<span>HR Consulting: </span>\"We provide expert advice on all aspects of human resource management, including recruitment, onboarding, performance management, and employee engagement.\"",
    ServiceList16: "<span>Talent Acquisition: </span>\"We leverage our network and innovative recruiting strategies to identify and attract top talent. We help you build a strong talent pool and find the best people for your organization.\"",
     WhyChooseUs: "Why Choose Us?",
    WhyChooseUsH1: "13+ Years",
    WhyChooseUsP1: "Of Experience Proven track record of delivering exceptional results",

    WhyChooseUsH2: "Expert team",
    WhyChooseUsP2: "Certified professionals dedicated to your success.",

    WhyChooseUsH3: "Complete solutions",
    WhyChooseUsP3: "End-to-end services covering all your technology needs",
    ServceHeader1: "Offshore IT Solutions",
    OffshoreSubHeader: "Web Development & Remote Teams from Kigali, Rwanda",
    OffshoreIntro: "At LK GROUP, we offer scalable, cost-effective offshore IT services from Rwanda — from modern website builds to assembling high-performing remote tech teams.",
  
    WebsiteDevelopmentTitle: "Website Design & Development:",
    WebsiteCustom: "Custom-built websites: responsive, mobile-friendly, and brand-aligned",
    WebsiteEcom: "E-Commerce Solutions: secure stores with payment integration & product management",
    WebsiteCMS: "CMS Platforms:",
    CMSWordPress: "WordPress",
    CMSShopify: "Shopify",
    CMSCustom: "Custom-built platforms with admin dashboards",
    WebsiteSEO: "On-page SEO: meta tags, speed optimization, mobile-first design",
  
    RemoteTeamsTitle: "Dedicated Remote Teams:",
    RemoteTech: "Technologies: PHP, JavaScript, React, Laravel, .NET",
    RemoteEngagement: "Engagement: Short-term sprints or ongoing contracts, part-time or full-time",
    RemoteCulture: "Cultural Fit: English/French-speaking, time zone-aligned with Europe",
  
    MaintenanceTitle: "Ongoing Maintenance & Support:",
    MaintenancePerformance: "Performance monitoring",
    MaintenanceBugFix: "Bug fixing and security updates",
    MaintenanceHosting: "Server and hosting management (optional)",
    MaintenanceSupport: "24/7 tech support (for premium plans)",
  
    UIUXTitle: "UI/UX & Digital Branding:",
    UIUXInterfaces: "Modern web/mobile interfaces",
    UIUXLanding: "Custom landing pages & lead capture forms",
    UIUXLogo: "Logo design and branding kits",
  
    WhyChooseUsTitle: "Why Choose Us:",
    WhyKigali: "Kigali – A fast-growing East African tech hub",
    WhyCosts: "Lower costs – up to 50% cheaper than Europe",
    WhyTalent: "Skilled, remote-ready talent",
    WhyTimeZone: "Time zone advantage – Ideal for European clients",
  
    WhoIsThisForTitle: "Who This Is For:",
    ForStartups: "Startups needing fast & affordable MVPs",
    ForAgencies: "Agencies looking for white-label partners",
    ForSMEs: "SMEs building remote teams",
    ForOrgs: "Organizations expanding into Africa needing local IT presence",
  
    PricingTitle: "Pricing Overview (Flexible Plans):",
    BasicSite: "Basic Website",
    BusinessSite: "Business Website",
    EcomSite: "E-Commerce Site",
    DevPrice: "Dedicated Developer",
    PricingNote: "All packages are customizable based on your project scope.",
  
    NextStepsTitle: "Next Steps:",
    NextCall: "Book a free consultation call",
    NextGoals: "Tell us about your goals (we'll send you a short form)",
    NextQuote: "Receive a tailored quote within 48 hours",
    NextLaunch: "Launch your project with our Kigali-based team",



  },
  fr: {
    home: "Accueil",
    services: "Services",
    ServicesText:"“Nous offrons une suite de services complète, adaptée pour répondre aux défis et opportunités spécifiques rencontrés par les organisations modernes.”",
    about: "À Propos",
    contact: "Contactez-nous",
    HeaderMobile1: "Accueil",
    HeaderMobile2: "Services",
    HeaderMobile3: "À propos",
    HeaderMobile4: "Contactez-nous",
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
    footerMenu1: "Accueil",
    footerMenu2: "Nos services",
    footerMenu3: "À propos de nous",
    footerMenu4: "Contact",
    footerMenu5: "Réseaux sociaux",

    ServiceHeader1: "Présence numérique",
    ServiceSubHeader1: "Libérez votre potentiel numérique avec une présence en ligne puissante",
    ServiceP1: "\"Dans le paysage concurrentiel d'aujourd'hui, une présence en ligne forte est essentielle pour toute entreprise souhaitant croître et prospérer. Chez LK GROUP, nous proposons une suite complète de solutions de présence numérique, conçues pour vous aider à atteindre votre public cible, développer la notoriété de votre marque et obtenir des résultats significatifs.\"",
    ServiceList1: "<span>Conception de sites Web : </span>\"Nous créons des sites Web époustouflants et conviviaux qui reflètent l'identité de votre marque et engagent votre public. De la conception initiale au lancement, nous gérons tous les aspects du processus de conception, garantissant une expérience fluide et professionnelle.\"",
    ServiceList2: "<span>Gestion des médias sociaux : </span>\"Nous développons et mettons en œuvre des stratégies engageantes sur les médias sociaux pour connecter votre entreprise avec votre public cible sur les plateformes qu'ils utilisent le plus. Nous créons du contenu captivant, gérons vos comptes sociaux et suivons vos performances, garantissant que votre marque soit vue et entendue.\"",
    ServiceList3: "<span>Création de contenu : </span>\"Nous créons un contenu percutant qui éduque, divertit et inspire votre public. Des articles de blog et articles aux textes de sites Web et légendes sur les réseaux sociaux, nous fournissons un contenu de haute qualité qui résonne avec votre marché cible et favorise l'engagement.\"",

    ServiceHeader2: "Cybersécurité",
    ServiceSubHeader2: "Protégez votre entreprise des menaces cybernétiques",
    ServiceP2: "\"Les menaces de cybersécurité deviennent de plus en plus sophistiquées et omniprésentes. Chez LK GROUP, nous proposons des solutions de cybersécurité complètes pour protéger les données, les systèmes et la réputation de votre entreprise.\"",
    ServiceList4: "Création de Contenu : Nous créons du contenu captivant qui éduque, divertit et inspire votre public. Des articles de blog et des articles aux textes de sites web et légendes sur les réseaux sociaux, nous fournissons du contenu de haute qualité qui résonne avec votre marché cible et favorise l'engagement.",
    ServiceList5: "<span>Évaluation de la cybersécurité : </span>\"Nous effectuons des évaluations approfondies de la cybersécurité pour identifier les vulnérabilités potentielles dans votre réseau, vos systèmes et vos applications. Nos experts fournissent un rapport détaillé avec des recommandations pour la correction et des améliorations continues de la sécurité.\"",
    ServiceList6: "<span>Solutions de sécurité : </span>\"Nous mettons en œuvre une gamme de solutions de sécurité adaptées à vos besoins et à votre profil de risque spécifiques, y compris la gestion des pare-feu, le chiffrement des données, la détection des intrusions, la protection anti-malware et le filtrage des e-mails de phishing et de spam.\"",
    ServiceList7: "<span>Réponse aux incidents : </span>\"En cas de violation de sécurité, notre équipe fournit des services de réponse aux incidents rapides et experts pour minimiser les dommages et restaurer vos systèmes rapidement. Nous vous aidons également avec l'analyse et la correction post-incident, vous aidant à récupérer et à prévenir de futures attaques.\"",

    ServiceHeader3: "Support informatique et services gérés",
    ServiceSubHeader3: "Libérez l'esprit avec un support informatique fiable",
    ServiceP3: "\"Concentrez-vous sur votre entreprise, pas sur votre infrastructure informatique. LK GROUP fournit des services de support informatique et des services gérés complets pour garantir que votre technologie fonctionne de manière fluide et efficace.\"",
    ServiceList8: "<span>Support à distance : </span>\"Nos techniciens informatiques expérimentés fournissent un support rapide et efficace pour tous vos problèmes matériels et logiciels. Nous proposons des plans de support flexibles pour répondre à vos besoins, de l'assistance à la demande à la couverture 24/7.\"",
    ServiceList10: "<span>Rapports d'intervention : </span>\"Nous conservons des dossiers détaillés de toutes les interventions informatiques, y compris les dates, heures, problèmes, solutions et durées. Nous générons des rapports complets pour fournir des informations sur la performance informatique et identifier les domaines à améliorer.\"",
    ServiceList11: "<span>Formation des utilisateurs : </span>\"Nous proposons des programmes de formation personnalisés pour aider vos employés à maximiser leurs compétences et leur efficacité en informatique. Nos formations couvrent une large gamme de logiciels, de matériels et de bonnes pratiques en matière de cybersécurité.\"",
    ServiceList12: "<span>Mises à jour logicielles et matérielles : </span>\"Nous gérons et mettons en œuvre les mises à jour logicielles pour garantir la sécurité et des performances optimales. Nous surveillons également l'état du matériel et traitons de manière proactive les problèmes potentiels, prévenant ainsi les pannes et assurant la fiabilité à long terme.\"",

    ServiceHeader4: "Communication et conseil en RH",
    ServiceSubHeader4: "Renforcez votre marque et construisez une équipe hautement performante",
    ServiceP4: "\"LK GROUP propose des services de conseil en communication et en ressources humaines pour vous aider à construire une marque solide, à engager votre public cible et à cultiver un environnement de travail performant.\"",
    ServiceList13: "<span>Stratégie de communication : </span>\"Nous élaborons des stratégies de communication complètes pour garantir que vos messages sont cohérents, percutants et résonnent avec votre public cible. Nous vous aidons à identifier les messages clés, les publics cibles et les meilleurs canaux de communication pour vos objectifs.\"",
    ServiceList14: "<span>Branding : </span>\"Nous créons une identité de marque forte qui reflète vos valeurs, votre mission et votre vision. Nous créons une expérience de marque cohérente sur tous vos supports marketing, votre présence en ligne et vos communications internes.\"",
    ServiceList15: "<span>Conseil en RH : </span>\"Nous fournissons des conseils experts sur tous les aspects de la gestion des ressources humaines, y compris le recrutement, l'intégration, la gestion des performances et l'engagement des employés.\"",
    ServiceList16: "<span>Acquisition de talents : </span>\"Nous mettons à profit notre réseau et nos stratégies de recrutement innovantes pour identifier et attirer les meilleurs talents. Nous vous aidons à constituer un vivier de talents solide et à trouver les meilleures personnes pour votre organisation.\"",
    WhyChooseUs: "Pourquoi nous choisir ?",
    WhyChooseUsH1: "13+ Ans",
    WhyChooseUsP1: "D'expérience. Un parcours prouvé de résultats exceptionnels.",

    WhyChooseUsH2: "Équipe d'experts",
    WhyChooseUsP2: "Des professionnels certifiés dédiés à votre succès.",

    WhyChooseUsH3: "Solutions complètes",
    WhyChooseUsP3: "Des services de bout en bout couvrant tous vos besoins technologiques",
    ServceHeader1: "Solutions informatiques offshore",
    OffshoreSubHeader: "Développement Web & Équipes distantes depuis Kigali, Rwanda",
    OffshoreIntro: "Chez LK GROUP, nous proposons des services informatiques offshore évolutifs et rentables depuis le Rwanda — de la création de sites modernes à la mise en place d’équipes techniques performantes.",
  
    WebsiteDevelopmentTitle: "Conception & Développement de sites web :",
    WebsiteCustom: "Sites web sur mesure : responsive, adaptés aux mobiles et alignés à votre marque",
    WebsiteEcom: "Solutions E-commerce : boutiques sécurisées avec paiement intégré & gestion de produits",
    WebsiteCMS: "Plateformes CMS :",
    CMSWordPress: "WordPress",
    CMSShopify: "Shopify",
    CMSCustom: "Plateformes sur mesure avec tableaux de bord administrateurs",
    WebsiteSEO: "SEO on-page : balises meta, optimisation de vitesse, design mobile-first",
  
    RemoteTeamsTitle: "Équipes Distantes Dédiées :",
    RemoteTech: "Technologies : PHP, JavaScript, React, Laravel, .NET",
    RemoteEngagement: "Engagement : sprints à court terme ou contrats continus, temps partiel ou plein",
    RemoteCulture: "Adaptation culturelle : anglophones/francophones, alignés sur les fuseaux européens",
  
    MaintenanceTitle: "Maintenance & Support continu :",
    MaintenancePerformance: "Surveillance des performances",
    MaintenanceBugFix: "Correction de bugs et mises à jour de sécurité",
    MaintenanceHosting: "Gestion des serveurs et hébergement (optionnel)",
    MaintenanceSupport: "Support technique 24/7 (plans premium)",
  
    UIUXTitle: "UI/UX & Branding Digital :",
    UIUXInterfaces: "Interfaces web/mobile modernes",
    UIUXLanding: "Pages d’atterrissage personnalisées & formulaires de capture de leads",
    UIUXLogo: "Conception de logos et kits de marque",
  
    WhyChooseUsTitle: "Pourquoi nous choisir :",
    WhyKigali: "Kigali – Un hub technologique en pleine croissance en Afrique de l'Est",
    WhyCosts: "Coûts réduits – jusqu’à 50 % moins chers qu’en Europe",
    WhyTalent: "Talents qualifiés et prêts pour le télétravail",
    WhyTimeZone: "Avantage de fuseau horaire – Idéal pour les clients européens",
  
    WhoIsThisForTitle: "Pour qui est-ce :",
    ForStartups: "Startups ayant besoin de MVP rapides et abordables",
    ForAgencies: "Agences recherchant des partenaires en marque blanche",
    ForSMEs: "PME constituant des équipes distantes",
    ForOrgs: "Organisations s’implantant en Afrique avec un besoin IT local",
  
    PricingTitle: "Aperçu des Tarifs (Plans Flexibles) :",
    BasicSite: "Site Web de Base",
    BusinessSite: "Site Web d’Entreprise",
    EcomSite: "Site E-Commerce",
    DevPrice: "Développeur Dédié",
    PricingNote: "Tous les forfaits sont personnalisables selon votre projet.",
  
    NextStepsTitle: "Prochaines Étapes :",
    NextCall: "Réservez un appel de consultation gratuit",
    NextGoals: "Parlez-nous de vos objectifs (nous vous enverrons un court formulaire)",
    NextQuote: "Recevez un devis personnalisé sous 48h",
    NextLaunch: "Lancez votre projet avec notre équipe basée à Kigali",


     
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
  document.getElementById("ServicesText").innerHTML = translations[currentLanguage].ServicesText;
  document.getElementById("aboutLink").innerHTML = translations[currentLanguage].about;
  document.getElementById("contactLink").innerHTML = translations[currentLanguage].contact;
  document.getElementById("HeaderMobile1").innerHTML = translations[currentLanguage].HeaderMobile1;
  document.getElementById("HeaderMobile2").innerHTML = translations[currentLanguage].HeaderMobile2;
  document.getElementById("HeaderMobile3").innerHTML = translations[currentLanguage].HeaderMobile3;
  document.getElementById("HeaderMobile4").innerHTML = translations[currentLanguage].HeaderMobile4;


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

     // Services section

   document.getElementById("footerMenu1").innerHTML = translations[currentLanguage].footerMenu1;
   document.getElementById("footerMenu2").innerHTML = translations[currentLanguage].footerMenu2;
   document.getElementById("footerMenu3").innerHTML = translations[currentLanguage].footerMenu3;
   document.getElementById("footerMenu4").innerHTML = translations[currentLanguage].footerMenu4;
   document.getElementById("footerMenu5").innerHTML = translations[currentLanguage].footerMenu5;

   document.getElementById("ServiceHeader1").innerHTML = translations[currentLanguage].ServiceHeader1;
   document.getElementById("ServiceSubHeader1").innerHTML = translations[currentLanguage].ServiceSubHeader1;
   document.getElementById("ServiceP1").innerHTML = translations[currentLanguage].ServiceP1;
   document.getElementById("ServiceList1").innerHTML = translations[currentLanguage].ServiceList1;
   document.getElementById("ServiceList2").innerHTML = translations[currentLanguage].ServiceList2;
   document.getElementById("ServiceList3").innerHTML = translations[currentLanguage].ServiceList3;

   document.getElementById("ServiceHeader2").innerHTML = translations[currentLanguage].ServiceHeader2;
   document.getElementById("ServiceSubHeader2").innerHTML = translations[currentLanguage].ServiceSubHeader2;
   document.getElementById("ServiceP2").innerHTML = translations[currentLanguage].ServiceP2;
   document.getElementById("ServiceList5").innerHTML = translations[currentLanguage].ServiceList5;
   document.getElementById("ServiceList6").innerHTML = translations[currentLanguage].ServiceList6;
   document.getElementById("ServiceList7").innerHTML = translations[currentLanguage].ServiceList7;

   document.getElementById("ServiceHeader3").innerHTML = translations[currentLanguage].ServiceHeader3;
   document.getElementById("ServiceSubHeader3").innerHTML = translations[currentLanguage].ServiceSubHeader3;
   document.getElementById("ServiceP3").innerHTML = translations[currentLanguage].ServiceP3;
   document.getElementById("ServiceList8").innerHTML = translations[currentLanguage].ServiceList8;
   document.getElementById("ServiceList9").innerHTML = translations[currentLanguage].ServiceList9;
   document.getElementById("ServiceList10").innerHTML = translations[currentLanguage].ServiceList10;
   document.getElementById("ServiceList11").innerHTML = translations[currentLanguage].ServiceList11;
   document.getElementById("ServiceList12").innerHTML = translations[currentLanguage].ServiceList12;

   document.getElementById("ServiceHeader4").innerHTML = translations[currentLanguage].ServiceHeader4;
   document.getElementById("ServiceSubHeader4").innerHTML = translations[currentLanguage].ServiceSubHeader4;
   document.getElementById("ServiceP4").innerHTML = translations[currentLanguage].ServiceP4;
   document.getElementById("ServiceList13").innerHTML = translations[currentLanguage].ServiceList13;
   document.getElementById("ServiceList14").innerHTML = translations[currentLanguage].ServiceList14;
   document.getElementById("ServiceList15").innerHTML = translations[currentLanguage].ServiceList15;
   document.getElementById("ServiceList16").innerHTML = translations[currentLanguage].ServiceList16;

   // Why choose us
   document.getElementById("WhyChooseUs").innerHTML = translations[currentLanguage].WhyChooseUs;
   document.getElementById("WhyChooseUsH1").innerHTML = translations[currentLanguage].WhyChooseUsH1;
   document.getElementById("WhyChooseUsP1").innerHTML = translations[currentLanguage].WhyChooseUsP1;

   document.getElementById("WhyChooseUsH2").innerHTML = translations[currentLanguage].WhyChooseUsH2;
   document.getElementById("WhyChooseUsP2").innerHTML = translations[currentLanguage].WhyChooseUsP2;

   document.getElementById("WhyChooseUsH3").innerHTML = translations[currentLanguage].WhyChooseUsH3;
   document.getElementById("WhyChooseUsP3").innerHTML = translations[currentLanguage].WhyChooseUsP3;


   // off shore IT solutions

   document.getElementById("ServceHeader1").innerHTML = translations[currentLanguage].ServceHeader1;
   document.getElementById("OffshoreSubHeader").innerHTML = translations[currentLanguage].OffshoreSubHeader;
   document.getElementById("OffshoreIntro").innerHTML = translations[currentLanguage].OffshoreIntro;

   document.getElementById("WebsiteDevelopmentTitle").innerHTML = translations[currentLanguage].WebsiteDevelopmentTitle;
   document.getElementById("WebsiteCustom").innerHTML = translations[currentLanguage].WebsiteCustom;
   document.getElementById("WebsiteEcom").innerHTML = translations[currentLanguage].WebsiteEcom;
   document.getElementById("WebsiteCMS").innerHTML = translations[currentLanguage].WebsiteCMS;
   document.getElementById("CMSWordPress").innerHTML = translations[currentLanguage].CMSWordPress;
   document.getElementById("CMSShopify").innerHTML = translations[currentLanguage].CMSShopify;
   document.getElementById("CMSCustom").innerHTML = translations[currentLanguage].CMSCustom;
   document.getElementById("WebsiteSEO").innerHTML = translations[currentLanguage].WebsiteSEO;

   document.getElementById("RemoteTeamsTitle").innerHTML = translations[currentLanguage].RemoteTeamsTitle;
   document.getElementById("RemoteTech").innerHTML = translations[currentLanguage].RemoteTech;
   document.getElementById("RemoteEngagement").innerHTML = translations[currentLanguage].RemoteEngagement;
   document.getElementById("RemoteCulture").innerHTML = translations[currentLanguage].RemoteCulture;

   document.getElementById("MaintenanceTitle").innerHTML = translations[currentLanguage].MaintenanceTitle;
   document.getElementById("MaintenancePerformance").innerHTML = translations[currentLanguage].MaintenancePerformance;
   document.getElementById("MaintenanceBugFix").innerHTML = translations[currentLanguage].MaintenanceBugFix;
   document.getElementById("MaintenanceHosting").innerHTML = translations[currentLanguage].MaintenanceHosting;
   document.getElementById("MaintenanceSupport").innerHTML = translations[currentLanguage].MaintenanceSupport;

   document.getElementById("UIUXTitle").innerHTML = translations[currentLanguage].UIUXTitle;
   document.getElementById("UIUXInterfaces").innerHTML = translations[currentLanguage].UIUXInterfaces;
   document.getElementById("UIUXLanding").innerHTML = translations[currentLanguage].UIUXLanding;
   document.getElementById("UIUXLogo").innerHTML = translations[currentLanguage].UIUXLogo;

   document.getElementById("WhyChooseUsTitle").innerHTML = translations[currentLanguage].WhyChooseUsTitle;
   document.getElementById("WhyKigali").innerHTML = translations[currentLanguage].WhyKigali;
   document.getElementById("WhyCosts").innerHTML = translations[currentLanguage].WhyCosts;
   document.getElementById("WhyTalent").innerHTML = translations[currentLanguage].WhyTalent;
   document.getElementById("WhyTimeZone").innerHTML = translations[currentLanguage].WhyTimeZone;

   document.getElementById("WhoIsThisForTitle").innerHTML = translations[currentLanguage].WhoIsThisForTitle;
   document.getElementById("ForStartups").innerHTML = translations[currentLanguage].ForStartups;
   document.getElementById("ForAgencies").innerHTML = translations[currentLanguage].ForAgencies;
   document.getElementById("ForSMEs").innerHTML = translations[currentLanguage].ForSMEs;
   document.getElementById("ForOrgs").innerHTML = translations[currentLanguage].ForOrgs;

   document.getElementById("PricingTitle").innerHTML = translations[currentLanguage].PricingTitle;
   document.getElementById("BasicSite").innerHTML = translations[currentLanguage].BasicSite;
   document.getElementById("BusinessSite").innerHTML = translations[currentLanguage].BusinessSite;
   document.getElementById("EcomSite").innerHTML = translations[currentLanguage].EcomSite;
   document.getElementById("DevPrice").innerHTML = translations[currentLanguage].DevPrice;
   document.getElementById("PricingNote").innerHTML = translations[currentLanguage].PricingNote;

   document.getElementById("NextStepsTitle").innerHTML = translations[currentLanguage].NextStepsTitle;
   document.getElementById("NextCall").innerHTML = translations[currentLanguage].NextCall;
   document.getElementById("NextGoals").innerHTML = translations[currentLanguage].NextGoals;
   document.getElementById("NextQuote").innerHTML = translations[currentLanguage].NextQuote;
   document.getElementById("NextLaunch").innerHTML = translations[currentLanguage].NextLaunch;



   
   

   
  
}

// Set default language content on page load
document.addEventListener("DOMContentLoaded", () => {
  // Ensure that the correct language is set on page load
  document.getElementById('languageBtn').innerText = currentLanguage === 'en' ? 'Fr' : 'En';

  // Update content based on the saved language
  document.getElementById("homeLink").innerHTML = translations[currentLanguage].home;
  document.getElementById("servicesLink").innerHTML = translations[currentLanguage].services;
  document.getElementById("ServicesText").innerHTML = translations[currentLanguage].ServicesText;
  document.getElementById("aboutLink").innerHTML = translations[currentLanguage].about;
  document.getElementById("contactLink").innerHTML = translations[currentLanguage].contact;
  document.getElementById("HeaderMobile1").innerHTML = translations[currentLanguage].HeaderMobile1;
  document.getElementById("HeaderMobile2").innerHTML = translations[currentLanguage].HeaderMobile2;
  document.getElementById("HeaderMobile3").innerHTML = translations[currentLanguage].HeaderMobile3;
  document.getElementById("HeaderMobile4").innerHTML = translations[currentLanguage].HeaderMobile4;


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

  // Services section

  document.getElementById("footerMenu1").innerHTML = translations[currentLanguage].footerMenu1;
  document.getElementById("footerMenu2").innerHTML = translations[currentLanguage].footerMenu2;
  document.getElementById("footerMenu3").innerHTML = translations[currentLanguage].footerMenu3;
  document.getElementById("footerMenu4").innerHTML = translations[currentLanguage].footerMenu4;
  document.getElementById("footerMenu5").innerHTML = translations[currentLanguage].footerMenu5;

  document.getElementById("ServiceHeader1").innerHTML = translations[currentLanguage].ServiceHeader1;
  document.getElementById("ServiceSubHeader1").innerHTML = translations[currentLanguage].ServiceSubHeader1;
  document.getElementById("ServiceP1").innerHTML = translations[currentLanguage].ServiceP1;
  document.getElementById("ServiceList1").innerHTML = translations[currentLanguage].ServiceList1;
  document.getElementById("ServiceList2").innerHTML = translations[currentLanguage].ServiceList2;
  document.getElementById("ServiceList3").innerHTML = translations[currentLanguage].ServiceList3;

  document.getElementById("ServiceHeader2").innerHTML = translations[currentLanguage].ServiceHeader2;
  document.getElementById("ServiceSubHeader2").innerHTML = translations[currentLanguage].ServiceSubHeader2;
  document.getElementById("ServiceP2").innerHTML = translations[currentLanguage].ServiceP2;
  document.getElementById("ServiceList5").innerHTML = translations[currentLanguage].ServiceList5;
  document.getElementById("ServiceList6").innerHTML = translations[currentLanguage].ServiceList6;
  document.getElementById("ServiceList7").innerHTML = translations[currentLanguage].ServiceList7;

  document.getElementById("ServiceHeader3").innerHTML = translations[currentLanguage].ServiceHeader3;
  document.getElementById("ServiceSubHeader3").innerHTML = translations[currentLanguage].ServiceSubHeader3;
  document.getElementById("ServiceP3").innerHTML = translations[currentLanguage].ServiceP3;
  document.getElementById("ServiceList8").innerHTML = translations[currentLanguage].ServiceList8;
  document.getElementById("ServiceList9").innerHTML = translations[currentLanguage].ServiceList9;
  document.getElementById("ServiceList10").innerHTML = translations[currentLanguage].ServiceList10;
  document.getElementById("ServiceList11").innerHTML = translations[currentLanguage].ServiceList11;
  document.getElementById("ServiceList12").innerHTML = translations[currentLanguage].ServiceList12;

  document.getElementById("ServiceHeader4").innerHTML = translations[currentLanguage].ServiceHeader4;
  document.getElementById("ServiceSubHeader4").innerHTML = translations[currentLanguage].ServiceSubHeader4;
  document.getElementById("ServiceP4").innerHTML = translations[currentLanguage].ServiceP4;
  document.getElementById("ServiceList13").innerHTML = translations[currentLanguage].ServiceList13;
  document.getElementById("ServiceList14").innerHTML = translations[currentLanguage].ServiceList14;
  document.getElementById("ServiceList15").innerHTML = translations[currentLanguage].ServiceList15;
  document.getElementById("ServiceList16").innerHTML = translations[currentLanguage].ServiceList16;

  // Why Choose US
  document.getElementById("WhyChooseUs").innerHTML = translations[currentLanguage].WhyChooseUs;
  document.getElementById("WhyChooseUsH1").innerHTML = translations[currentLanguage].WhyChooseUsH1;
  document.getElementById("WhyChooseUsP1").innerHTML = translations[currentLanguage].WhyChooseUsP1;

  document.getElementById("WhyChooseUsH2").innerHTML = translations[currentLanguage].WhyChooseUsH2;
  document.getElementById("WhyChooseUsP2").innerHTML = translations[currentLanguage].WhyChooseUsP2;

  document.getElementById("WhyChooseUsH3").innerHTML = translations[currentLanguage].WhyChooseUsH3;
  document.getElementById("WhyChooseUsP3").innerHTML = translations[currentLanguage].WhyChooseUsP3;

     // off shore IT solutions

  document.getElementById("ServceHeader1").innerHTML = translations[currentLanguage].ServceHeader1;
  document.getElementById("OffshoreSubHeader").innerHTML = translations[currentLanguage].OffshoreSubHeader;
  document.getElementById("OffshoreIntro").innerHTML = translations[currentLanguage].OffshoreIntro;
  
  document.getElementById("WebsiteDevelopmentTitle").innerHTML = translations[currentLanguage].WebsiteDevelopmentTitle;
  document.getElementById("WebsiteCustom").innerHTML = translations[currentLanguage].WebsiteCustom;
  document.getElementById("WebsiteEcom").innerHTML = translations[currentLanguage].WebsiteEcom;
  document.getElementById("WebsiteCMS").innerHTML = translations[currentLanguage].WebsiteCMS;
  document.getElementById("CMSWordPress").innerHTML = translations[currentLanguage].CMSWordPress;
  document.getElementById("CMSShopify").innerHTML = translations[currentLanguage].CMSShopify;
  document.getElementById("CMSCustom").innerHTML = translations[currentLanguage].CMSCustom;
  document.getElementById("WebsiteSEO").innerHTML = translations[currentLanguage].WebsiteSEO;
  
  document.getElementById("RemoteTeamsTitle").innerHTML = translations[currentLanguage].RemoteTeamsTitle;
  document.getElementById("RemoteTech").innerHTML = translations[currentLanguage].RemoteTech;
  document.getElementById("RemoteEngagement").innerHTML = translations[currentLanguage].RemoteEngagement;
  document.getElementById("RemoteCulture").innerHTML = translations[currentLanguage].RemoteCulture;
  
  document.getElementById("MaintenanceTitle").innerHTML = translations[currentLanguage].MaintenanceTitle;
  document.getElementById("MaintenancePerformance").innerHTML = translations[currentLanguage].MaintenancePerformance;
  document.getElementById("MaintenanceBugFix").innerHTML = translations[currentLanguage].MaintenanceBugFix;
  document.getElementById("MaintenanceHosting").innerHTML = translations[currentLanguage].MaintenanceHosting;
  document.getElementById("MaintenanceSupport").innerHTML = translations[currentLanguage].MaintenanceSupport;
  
  document.getElementById("UIUXTitle").innerHTML = translations[currentLanguage].UIUXTitle;
  document.getElementById("UIUXInterfaces").innerHTML = translations[currentLanguage].UIUXInterfaces;
  document.getElementById("UIUXLanding").innerHTML = translations[currentLanguage].UIUXLanding;
  document.getElementById("UIUXLogo").innerHTML = translations[currentLanguage].UIUXLogo;
  
  document.getElementById("WhyChooseUsTitle").innerHTML = translations[currentLanguage].WhyChooseUsTitle;
  document.getElementById("WhyKigali").innerHTML = translations[currentLanguage].WhyKigali;
  document.getElementById("WhyCosts").innerHTML = translations[currentLanguage].WhyCosts;
  document.getElementById("WhyTalent").innerHTML = translations[currentLanguage].WhyTalent;
  document.getElementById("WhyTimeZone").innerHTML = translations[currentLanguage].WhyTimeZone;
  
  document.getElementById("WhoIsThisForTitle").innerHTML = translations[currentLanguage].WhoIsThisForTitle;
  document.getElementById("ForStartups").innerHTML = translations[currentLanguage].ForStartups;
  document.getElementById("ForAgencies").innerHTML = translations[currentLanguage].ForAgencies;
  document.getElementById("ForSMEs").innerHTML = translations[currentLanguage].ForSMEs;
  document.getElementById("ForOrgs").innerHTML = translations[currentLanguage].ForOrgs;
  
  document.getElementById("PricingTitle").innerHTML = translations[currentLanguage].PricingTitle;
  document.getElementById("BasicSite").innerHTML = translations[currentLanguage].BasicSite;
  document.getElementById("BusinessSite").innerHTML = translations[currentLanguage].BusinessSite;
  document.getElementById("EcomSite").innerHTML = translations[currentLanguage].EcomSite;
  document.getElementById("DevPrice").innerHTML = translations[currentLanguage].DevPrice;
  document.getElementById("PricingNote").innerHTML = translations[currentLanguage].PricingNote;
  
  document.getElementById("NextStepsTitle").innerHTML = translations[currentLanguage].NextStepsTitle;
  document.getElementById("NextCall").innerHTML = translations[currentLanguage].NextCall;
  document.getElementById("NextGoals").innerHTML = translations[currentLanguage].NextGoals;
  document.getElementById("NextQuote").innerHTML = translations[currentLanguage].NextQuote;
  document.getElementById("NextLaunch").innerHTML = translations[currentLanguage].NextLaunch;




});
