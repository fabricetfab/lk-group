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
    AboutHero: 'ABOUT <span>US</span>',
    HeroText: '“LK GROUP is a unique and dynamic company dedicated to helping businesses thrive in today\'s digital landscape”.',
    OurStory: "Our Story",
    ContactButton: "Contact Us",
    StoryText: "L<span>K</span> GROUP was founded in 2010 by a small team of passionate IT professionals who believed in the power of technology to empower businesses and individuals. Driven by a shared desire to create a more connected and secure digital world, they started by providing local IT support and consulting services to small businesses in their community. As their reputation for excellence grew, so did their client base, which led to the expansion of their service offerings. LK GROUP quickly became known for their innovative solutions and their dedication to exceeding client expectations. Today, LK GROUP has evolved into a leading technology solutions provider, serving clients across various industries and sectors. The company's commitment to innovation, customer satisfaction, and a strong ethical foundation has remained steadfast throughout its growth, making it a trusted partner for businesses seeking to navigate the complexities of the digital age.",
    missionTab: "Mission",
    visionTab: "Vision",
    valuesTab: "Values",
    OurMission: "To empower businesses with seamless technology solutions that drive growth, efficiency, and innovation.",
    OurMission2: "We are dedicated to providing businesses with cutting-edge, scalable solutions that not only help them thrive in a rapidly changing digital landscape but also foster long-term growth, operational efficiency, and continuous innovation. Our goal is to be a trusted partner in their digital transformation journey.",
    OurVision: "To become the leading provider of comprehensive digital solutions, enabling businesses to thrive in a rapidly evolving digital landscape.",
    OurVision2: "To empower businesses with seamless technology solutions that drive growth, enhance operational efficiency, and foster continuous innovation. Our goal is to provide businesses with the tools they need to succeed in a digital-first world, adapting to new challenges and staying ahead of the competition.",
    integrity: "Integrity: We operate with honesty and transparency, building trust with our clients and partners.",
    Focus: "Customer Focus: Our clients are at the heart of everything we do. We are committed to delivering exceptional service and exceeding expectations.",
    innovation: "Innovation: We embrace new technologies and ideas, constantly seeking ways to improve our solutions and create value for our clients.",
    collaboration: "Collaboration: We believe in the power of collaboration, working closely with our clients and partners to achieve shared goals.",
    excellence: "Excellence: We strive for excellence in everything we do, from the quality of our services to the professionalism of our team.",
    OurTeam: "Our Team",
    member1: "Kelly NATACHA",
    position1: "CEO - Chief Executive Officer",
    text1: "\"Every individual has the potential to contribute significantly to the workplace.\" – Kelly Natacha, CEO",
    text2: "Under Kelly Natacha's leadership, LK Group empowers organizations to thrive through innovation and social impact, fostering workplaces where talent and performance excel.",
    member2: "Kelly NATACHA",
    position2: "CEO - Chief Executive Officer",
    text3: "\"Every individual has the potential to contribute significantly to the workplace.\" – Kelly Natacha, CEO",
    text4: "Under Kelly Natacha's leadership, LK Group empowers organizations to thrive through innovation and social impact, fostering workplaces where talent and performance excel.",
    member3: "Kelly NATACHA",
    position3: "CEO - Chief Executive Officer",
    text5: "\"Every individual has the potential to contribute significantly to the workplace.\" – Kelly Natacha, CEO",
    text6: "Under Kelly Natacha's leadership, LK Group empowers organizations to thrive through innovation and social impact, fostering workplaces where talent and performance excel.",
    member4: "Kelly NATACHA",
    position4: "CEO - Chief Executive Officer",
    text7: "\"Every individual has the potential to contribute significantly to the workplace.\" – Kelly Natacha, CEO",
    text8: "Under Kelly Natacha's leadership, LK Group empowers organizations to thrive through innovation and social impact, fostering workplaces where talent and performance excel.",
    member5: "Kelly NATACHA",
    position5: "CEO - Chief Executive Officer",
    text9: "\"Every individual has the potential to contribute significantly to the workplace.\" – Kelly Natacha, CEO",
    text10: "Under Kelly Natacha's leadership, LK Group empowers organizations to thrive through innovation and social impact, fostering workplaces where talent and performance excel.",
    member6: "Kelly NATACHA",
    position6: "CEO - Chief Executive Officer",
    text11: "“Every individual has the potential to achieve amazing things.”",
    text12: "It's a passion that fuels everything, we do at LK RECRUITMENT we believe in a world where talent flourishes.",
    HowWeWork: 'How do we work?',
    step1: 'We collaborate closely with clients to understand their unique needs and goals, ensuring that our solutions align perfectly with their vision.',
    step2: 'We maintain open and transparent communication throughout the project, ensuring clients are informed at every stage.',
    step3: 'We offer customized strategies and services to address the specific challenges your business faces, ensuring optimal results.',
    step4: 'Our main goal is to deliver measurable results that drive growth, efficiency, and success for your business.',
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
    AboutHero: "À propos",
    HeroText: '“LK GROUP est une entreprise unique et dynamique dédiée à aider les entreprises à prospérer dans le paysage numérique d\'aujourd\'hui.”',
    OurStory: "Notre Histoire",
    ContactButton: "Contactez-nous",
    StoryText: "L<span>K</span> GROUP a été fondée en 2010 par une petite équipe de professionnels passionnés de l'informatique qui croyaient en la puissance de la technologie pour autonomiser les entreprises et les individus. Animés par un désir commun de créer un monde numérique plus connecté et sécurisé, ils ont commencé par offrir des services de support informatique et de conseil aux petites entreprises de leur communauté. Au fur et à mesure que leur réputation d'excellence grandissait, leur base de clients s'élargissait, ce qui a conduit à l'expansion de leurs offres de services. LK GROUP est rapidement devenu connu pour ses solutions innovantes et son engagement à dépasser les attentes des clients. Aujourd'hui, LK GROUP est devenu un fournisseur de solutions technologiques de premier plan, servant des clients dans divers secteurs et industries. L'engagement de l'entreprise en matière d'innovation, de satisfaction client et de fondation éthique solide est resté inébranlable tout au long de sa croissance, en faisant un partenaire de confiance pour les entreprises cherchant à naviguer dans les complexités de l'ère numérique.",
    missionTab: "Mission",
    visionTab: "Vision",
    valuesTab: "Valeurs",
    OurMission: "Donner aux entreprises les moyens de réussir grâce à des solutions technologiques fluides qui favorisent la croissance, l'efficacité et l'innovation.",
    OurMission2: "Nous nous engageons à fournir aux entreprises des solutions innovantes et évolutives qui non seulement les aident à prospérer dans un paysage numérique en rapide évolution, mais favorisent également la croissance à long terme, l'efficacité opérationnelle et l'innovation continue. Notre objectif est d'être un partenaire de confiance dans leur parcours de transformation numérique.",
    OurVision: "Devenir le principal fournisseur de solutions numériques complètes, permettant aux entreprises de prospérer dans un paysage numérique en constante évolution.",
    OurVision2: "Donner aux entreprises les moyens de réussir grâce à des solutions technologiques fluides qui favorisent la croissance, améliorent l'efficacité opérationnelle et favorisent l'innovation continue. Notre objectif est de fournir aux entreprises les outils dont elles ont besoin pour réussir dans un monde numérique, en s'adaptant aux nouveaux défis et en restant en avance sur la concurrence.",
    integrity: "Intégrité : Nous agissons avec honnêteté et transparence, établissant ainsi la confiance avec nos clients et partenaires.",
    Focus: "Orientation client : Nos clients sont au cœur de tout ce que nous faisons. Nous nous engageons à fournir un service exceptionnel et à dépasser leurs attentes.",
    innovation: "Innovation : Nous adoptons de nouvelles technologies et idées, cherchant constamment des moyens d'améliorer nos solutions et de créer de la valeur pour nos clients.",
    collaboration: "Collaboration : Nous croyons au pouvoir de la collaboration, travaillant étroitement avec nos clients et partenaires pour atteindre des objectifs communs.",
    excellence: "Excellence : Nous visons l'excellence dans tout ce que nous faisons, de la qualité de nos services à notre professionnalisme.",
    OurTeam: "Notre Équipe",
    member1: "Kelly NATACHA",
    position1: "PDG - Chief Executive Officer",
    text1: "\"Chaque individu a le potentiel de contribuer de manière significative au lieu de travail.\" – Kelly Natacha, PDG",
    text2: "Sous la direction de Kelly Natacha, LK Group permet aux organisations de prospérer grâce à l'innovation et à l'impact social, créant des environnements de travail où le talent et la performance excellent.",
    member2: "Kelly NATACHA",
    position2: "PDG - Chief Executive Officer",
    text3: "\"Chaque individu a le potentiel de contribuer de manière significative au lieu de travail.\" – Kelly Natacha, PDG",
    text4: "Sous la direction de Kelly Natacha, LK Group permet aux organisations de prospérer grâce à l'innovation et à l'impact social, créant des environnements de travail où le talent et la performance excellent.",
    member3: "Kelly NATACHA",
    position3: "PDG - Chief Executive Officer",
    text5: "\"Chaque individu a le potentiel de contribuer de manière significative au lieu de travail.\" – Kelly Natacha, PDG",
    text6: "Sous la direction de Kelly Natacha, LK Group permet aux organisations de prospérer grâce à l'innovation et à l'impact social, créant des environnements de travail où le talent et la performance excellent.",
    member4: "Kelly NATACHA",
    position4: "PDG - Chief Executive Officer",
    text7: "\"Chaque individu a le potentiel de contribuer de manière significative au lieu de travail.\" – Kelly Natacha, PDG",
    text8: "Sous la direction de Kelly Natacha, LK Group permet aux organisations de prospérer grâce à l'innovation et à l'impact social, créant des environnements de travail où le talent et la performance excellent.",
    member5: "Kelly NATACHA",
    position5: "PDG - Chief Executive Officer",
    text9: "\"Chaque individu a le potentiel de contribuer de manière significative au lieu de travail.\" – Kelly Natacha, PDG",
    text10: "Sous la direction de Kelly Natacha, LK Group permet aux organisations de prospérer grâce à l'innovation et à l'impact social, créant des environnements de travail où le talent et la performance excellent.",
    member6: "Kelly NATACHA",
    position6: "PDG - Chief Executive Officer",
    text11: "“Chaque individu a le potentiel d'accomplir des choses incroyables.”",
    text12: "C'est une passion qui alimente tout ce que nous faisons chez LK RECRUITMENT, nous croyons en un monde où le talent peut s'épanouir.",
    HowWeWork: 'Comment travaillons-nous ?',
    step1: 'Nous collaborons étroitement avec nos clients pour comprendre leurs besoins et objectifs uniques, garantissant ainsi que nos solutions sont en parfaite adéquation avec leur vision.',
    step2: 'Nous maintenons une communication ouverte et transparente tout au long du projet, garantissant que nos clients soient informés à chaque étape.',
    step3: 'Nous proposons des stratégies et services personnalisés pour répondre aux défis spécifiques de votre entreprise, garantissant ainsi des résultats optimaux.',
    step4: 'Notre objectif principal est de livrer des résultats mesurables qui favorisent la croissance, l\'efficacité et le succès de votre entreprise.',
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
    footerMenu5: "Social"
     
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
  document.getElementById("AboutHero").innerHTML = translations[currentLanguage].AboutHero;
  document.getElementById("HeroText").innerHTML = translations[currentLanguage].HeroText;

  // our stroy section
  document.getElementById("OurStory").innerHTML = translations[currentLanguage].OurStory;
  document.getElementById("ContactButton").innerHTML = translations[currentLanguage].ContactButton;
  document.getElementById("StoryText").innerHTML = translations[currentLanguage].StoryText;

    // Mission,vision,values secion
   document.getElementById("mission-tab").innerHTML = translations[currentLanguage].missionTab;
   document.getElementById("vision-tab").innerHTML = translations[currentLanguage].visionTab;
   document.getElementById("values-tab").innerHTML = translations[currentLanguage].valuesTab;
   document.getElementById("OurMission").innerHTML = translations[currentLanguage].OurMission;
   document.getElementById("OurMission2").innerHTML = translations[currentLanguage].OurMission2;
   document.getElementById("OurVision").innerHTML = translations[currentLanguage].OurVision;
   document.getElementById("OurVision2").innerHTML = translations[currentLanguage].OurVision2;
   document.getElementById("integrity").innerHTML = translations[currentLanguage].integrity;
   document.getElementById("Focus").innerHTML = translations[currentLanguage].Focus;
   document.getElementById("innovation").innerHTML = translations[currentLanguage].innovation;
   document.getElementById("collaboration").innerHTML = translations[currentLanguage].collaboration;
   document.getElementById("excellence").innerHTML = translations[currentLanguage].excellence;

       // Our Team Section
   document.getElementById("OurTeam").innerHTML = translations[currentLanguage].OurTeam;
   document.getElementById("member1").innerHTML = translations[currentLanguage].member1;
   document.getElementById("position1").innerHTML = translations[currentLanguage].position1;
   document.getElementById("text1").innerHTML = translations[currentLanguage].text1;
   document.getElementById("text2").innerHTML = translations[currentLanguage].text2;
   document.getElementById("member2").innerHTML = translations[currentLanguage].member2;
   document.getElementById("position2").innerHTML = translations[currentLanguage].position2;
   document.getElementById("text3").innerHTML = translations[currentLanguage].text3;
   document.getElementById("text4").innerHTML = translations[currentLanguage].text4;
   document.getElementById("member3").innerHTML = translations[currentLanguage].member3;
   document.getElementById("position3").innerHTML = translations[currentLanguage].position3;
   document.getElementById("text5").innerHTML = translations[currentLanguage].text5;
   document.getElementById("text6").innerHTML = translations[currentLanguage].text6;
   document.getElementById("member4").innerHTML = translations[currentLanguage].member4;
   document.getElementById("position4").innerHTML = translations[currentLanguage].position4;
   document.getElementById("text7").innerHTML = translations[currentLanguage].text7;
   document.getElementById("text8").innerHTML = translations[currentLanguage].text8;
   document.getElementById("position5").innerHTML = translations[currentLanguage].position5;
   document.getElementById("text9").innerHTML = translations[currentLanguage].text9;
   document.getElementById("text10").innerHTML = translations[currentLanguage].text10;
   document.getElementById("member6").innerHTML = translations[currentLanguage].member6;
   document.getElementById("position6").innerHTML = translations[currentLanguage].position6;
   document.getElementById("text11").innerHTML = translations[currentLanguage].text11;
   document.getElementById("text12").innerHTML = translations[currentLanguage].text12;

     // How We Work
   document.getElementById("HowWeWork").innerHTML = translations[currentLanguage].HowWeWork;
   document.getElementById("step1").innerHTML = translations[currentLanguage].step1;
   document.getElementById("step2").innerHTML = translations[currentLanguage].step2;
   document.getElementById("step3").innerHTML = translations[currentLanguage].step3;
   document.getElementById("step4").innerHTML = translations[currentLanguage].step4;

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
  document.getElementById("AboutHero").innerHTML = translations[currentLanguage].AboutHero;
  document.getElementById("HeroText").innerHTML = translations[currentLanguage].HeroText;

    // our stroy section
  document.getElementById("OurStory").innerHTML = translations[currentLanguage].OurStory;
  document.getElementById("ContactButton").innerHTML = translations[currentLanguage].ContactButton;
  document.getElementById("StoryText").innerHTML = translations[currentLanguage].StoryText;

      // Mission,vision,values secion
  document.getElementById("mission-tab").innerHTML = translations[currentLanguage].missionTab;
  document.getElementById("vision-tab").innerHTML = translations[currentLanguage].visionTab;
  document.getElementById("values-tab").innerHTML = translations[currentLanguage].valuesTab;
  document.getElementById("OurMission").innerHTML = translations[currentLanguage].OurMission;
  document.getElementById("OurMission2").innerHTML = translations[currentLanguage].OurMission2;
  document.getElementById("OurVision").innerHTML = translations[currentLanguage].OurVision;
  document.getElementById("OurVision2").innerHTML = translations[currentLanguage].OurVision2;
  document.getElementById("integrity").innerHTML = translations[currentLanguage].integrity;
  document.getElementById("Focus").innerHTML = translations[currentLanguage].Focus;
  document.getElementById("innovation").innerHTML = translations[currentLanguage].innovation;
  document.getElementById("collaboration").innerHTML = translations[currentLanguage].collaboration;
  document.getElementById("excellence").innerHTML = translations[currentLanguage].excellence;

    // Our Team Section
  document.getElementById("OurTeam").innerHTML = translations[currentLanguage].OurTeam;
  document.getElementById("member1").innerHTML = translations[currentLanguage].member1;
  document.getElementById("position1").innerHTML = translations[currentLanguage].position1;
  document.getElementById("text1").innerHTML = translations[currentLanguage].text1;
  document.getElementById("text2").innerHTML = translations[currentLanguage].text2;
  document.getElementById("member2").innerHTML = translations[currentLanguage].member2;
  document.getElementById("position2").innerHTML = translations[currentLanguage].position2;
  document.getElementById("text3").innerHTML = translations[currentLanguage].text3;
  document.getElementById("text4").innerHTML = translations[currentLanguage].text4;
  document.getElementById("member3").innerHTML = translations[currentLanguage].member3;
  document.getElementById("position3").innerHTML = translations[currentLanguage].position3;
  document.getElementById("text5").innerHTML = translations[currentLanguage].text5;
  document.getElementById("text6").innerHTML = translations[currentLanguage].text6;
  document.getElementById("member4").innerHTML = translations[currentLanguage].member4;
  document.getElementById("position4").innerHTML = translations[currentLanguage].position4;
  document.getElementById("text7").innerHTML = translations[currentLanguage].text7;
  document.getElementById("text8").innerHTML = translations[currentLanguage].text8;
  document.getElementById("member5").innerHTML = translations[currentLanguage].member5;
  document.getElementById("position5").innerHTML = translations[currentLanguage].position5;
  document.getElementById("text9").innerHTML = translations[currentLanguage].text9;
  document.getElementById("text10").innerHTML = translations[currentLanguage].text10;
  document.getElementById("member6").innerHTML = translations[currentLanguage].member6;
  document.getElementById("position6").innerHTML = translations[currentLanguage].position6;
  document.getElementById("text11").innerHTML = translations[currentLanguage].text11;
  document.getElementById("text12").innerHTML = translations[currentLanguage].text12;

    // How We Work section
  document.getElementById("HowWeWork").innerHTML = translations[currentLanguage].HowWeWork;
  document.getElementById("step1").innerHTML = translations[currentLanguage].step1;
  document.getElementById("step2").innerHTML = translations[currentLanguage].step2;
  document.getElementById("step3").innerHTML = translations[currentLanguage].step3;
  document.getElementById("step4").innerHTML = translations[currentLanguage].step4;

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


});
