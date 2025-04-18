<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="services.css">
  <title>Lk Group | Home Page</title>
  <style>
    body {
        background: #111111;
        overflow-x: hidden;
    }

    /* Default fixed-width layout for larger screens */
    .page {
        margin: auto;
        max-width: 1660px;
        overflow-x: hidden;
        margin-top: 110px;
    }
      .service1-contents .with-img{
          position: relative;
      }  
    @media (max-width: 1024px) {
      .service1-contents .with-img{
          position: initial;
      }  
      .service1-contents{
        padding-top: 50px;
      }
      .service-head{
        position: absolute; 
        top : 0;
        left: 0;
        right: 0;
      }
      .service-head.first{
        top : 40px;
        left: 80px;
        right: 80px;
      }
    }
    @media (max-width: 710px) {
      .service-head.first{
        top :40px;
        left: 40px;
        right: 40px;
      }
    }
    @media (max-width: 480px) {
      .service-head.first{
        top : 30px;
        left: 20px;
        right: 20px;
      }
    }

  </style>
</head>
<body>
<div class="page">

<div class="navigation-container">
<div class="real-header">
    <img src="imgs/logo.png" alt="logo" class="logo" />
    
    <div class="header-navigation">
      <a href="home.php" id="homeLink">Home</a>
      <a href="#services" id="servicesLink" class="active">Services</a>
      <a href="about.php" id="aboutLink">About Us</a>
      <a href="contact.php" id="contactLink">Contact Us</a>
    </div>

    <div class="header-links">
      <svg xmlns="http://www.w3.org/10000/svg" class="header-search" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="11" cy="11" r="8"></circle>
        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
      </svg>
      <form action="" class="form"><input type="search" class="search-bar" placeholder="Search..." /></form>
    </div>

    <button class="lang-btn d-flex" onclick="toggleLanguage()">
    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="black" class="bi bi-translate" viewBox="0 0 16 16">
        <path d="M4.545 6.714 4.11 8H3l1.862-5h1.284L8 8H6.833l-.435-1.286zm1.634-.736L5.5 3.956h-.049l-.679 2.022z"/>
        <path d="M0 2a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v3h3a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-3H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zm7.138 9.995q.289.451.63.846c-.748.575-1.673 1.001-2.768 1.292.178.217.451.635.555.867 1.125-.359 2.08-.844 2.886-1.494.777.665 1.739 1.165 2.93 1.472.133-.254.414-.673.629-.89-1.125-.253-2.057-.694-2.82-1.284.681-.747 1.222-1.651 1.621-2.757H14V8h-3v1.047h.765c-.318.844-.74 1.546-1.272 2.13a6 6 0 0 1-.415-.492 2 2 0 0 1-.94.31"/>
    </svg>  
    <span id="languageBtn"></span></button>


    <button class="hamburger btn btn-primary" style="background-color:transparent;border:none;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#343973" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
      </svg>
    </button>

      <div class="offcanvas offcanvas-end" data-bs-scroll="false" data-bs-backdrop="false" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasTopLabel" style="color: #343973;">MENUS</h5>
          <button type="button me-2" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
        <ul>
          <a href="home.php"><li>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
              <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
              <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293z"/>
            </svg>
            <label id="HeaderMobile1">Home</label>
          </li></a>
          
          <a href="services.php"><li>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-headset" viewBox="0 0 16 16">
              <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5"/>
            </svg>
            <label id="HeaderMobile2">Services</label>
          </li></a>
          
          <a href="about.php"><li>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
              <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/>
            </svg>
            <label id="HeaderMobile3">About Us</label>
          </li></a>
          
          <a href="contact.php" class="active"><li>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
            </svg>
            <label id="HeaderMobile4">Contact Us</label>
          </li></a>
        </ul>
        </div>
        </div>
      </div>
  </div>


  <div class="services-container">
    <div class="services-hero">
      <img src="imgs/services-bg.jfif" class="img-fluid">
      <div class="hero-contents">
        <h1 id="services">SERVICES</h1>
        <p class="w-75 text-center" id="ServicesText">“ We offer a comprehensive suite of services, tailored to address the specific challenges and opportunities faced by modern organizations”.</p>
      </div>
    </div>
  </div>


  <div class="services-contents" id="service-sec">
    <img src="imgs/m.png" class="services-contents-bg">
    
    <div class="service1 position-relative pb-5" id="Digita+Presence">
      <div class="service-head first">
        <h3 id="ServiceHeader1">Digital Presence</h3>
      </div>
      <div class="service1-contents">
        <div>
          <h5 class="h5" id="ServiceSubHeader1">Unlock Your Digital Potential with a Powerful Online Presence</h5>
          <p id="ServiceP1">"In today's competitive landscape, a strong online presence is essential for any business looking to grow and thrive. At LK GROUP, we offer a comprehensive suite of digital presence solutions, designed to help you reach your target audience, build brand awareness, and drive meaningful results.”</p>
          <ul>
          <li id="ServiceList1"><span>Web Design : </span> "We craft stunning, user-friendly websites that reflect your brand identity and engage your audience. From initial concept to launch, we handle every aspect of the design process, ensuring a seamless and professional experience."</li>
          <li id="ServiceList2"><span>Social Media Management : </span>  "We develop and implement engaging social media strategies to connect with your target audience on the platforms they use most. We create captivating content, manage your social media accounts, and track your performance, ensuring your brand is seen and heard." </li>
          <li id="ServiceList3"><span>Social Media Management : </span>  "We develop and implement engaging social media strategies to connect with your target audience on the platforms they use most. We create captivating content, manage your social media accounts, and track your performance, ensuring your brand is seen and heard." </li>
          <li id="ServiceList4"><span> Content Creation : </span>   "We craft compelling content that educates, entertains, and inspires your audience. From blog posts and articles to website copy and social media captions, we provide high-quality content that resonates with your target market and drives engagement." </li>
          </ul>
        </div>
        <div class="with-img">
          <img src="imgs/Oservice1.png" class="img-fluid">
          <button class="position-absolute bottom-0 start-50 translate-middle-x">See Details</button>
        </div>
      </div>
    </div>

    <div class="service1 position-relative pb-5" id="Cyber+Security">
      <div class="service1-contents container-xlg">
        <div class="with-img">
          <img src="imgs/Oservice2.png" class="img-fluid">
          <button class="position-absolute bottom-0 start-50 translate-middle-x">See Details</button>
        </div>
        <div>
          <div class="service-head">
            <h3 id="ServiceHeader2">Cybersecurity</h3>
            <p><span>></span><span>></span><span>></span></p>          
          </div>
          <h5 class="h5" id="ServiceSubHeader2">Protect Your Business from Cyber Threats</h5>
          <p id="ServiceP2">"Cybersecurity threats are becoming increasingly sophisticated and pervasive. At LK GROUP, we provide comprehensive cybersecurity solutions to safeguard your business data, systems, and reputation."</p>
          <ul>
            <li id="ServiceList5"><span>Cybersecurity Assessment: </span> "We conduct thorough cybersecurity assessments to identify potential vulnerabilities in your network, systems, and applications. Our experts provide a detailed report with recommendations for remediation and ongoing security improvements."</li>
            <li id="ServiceList6"><span>Security Solutions: </span> "We implement a range of security solutions tailored to your specific needs and risk profile, including firewall management, data encryption, intrusion detection, anti-malware protection, and phishing and spam filtering."</li>
            <li id="ServiceList7"><span>Incident Response: </span> "In the event of a security breach, our team provides swift and expert incident response services to minimize damage and restore your systems quickly. We also assist with post-incident analysis and remediation, helping you recover and prevent future attacks."</li>
          </ul>
        </div>
      </div>
    </div>


    <div class="service1 position-relative pb-5" id="IT+Support">
      <div class="service1-contents container-xlg">
        <div>
          <div class="service-head">
            <h3 id="ServiceHeader3">IT support & Managed Service</h3>
            <p><span>></span><span>></span><span>></span></p>          
          </div>
          <h5 class="h5" id="ServiceSubHeader3">Unlock Peace of Mind with Reliable IT Support</h5>
          <p id="ServiceP3">"Focus on your business, not your IT infrastructure. LK GROUP provides comprehensive IT support and managed services to ensure your technology runs smoothly and efficiently."</p>
          <ul>
            <li id="ServiceList8"><span>Remote Support: </span> "Our experienced IT technicians provide fast and efficient remote support for all your hardware and software issues. We offer flexible support plans to fit your needs, from on-demand assistance to 24/7 coverage."</li>
            <li id="ServiceList9"><span>Ticketing System: </span> "Our secure ticketing system ensures clear communication and efficient issue tracking. Submit a ticket for support, monitor its progress, and receive timely updates."</li>
            <li id="ServiceList10"><span>Intervention Reporting: </span> "We maintain detailed records of all IT interventions, including dates, times, issues, solutions, and durations. We generate comprehensive reports to provide insights into IT performance and identify areas for improvement."</li>
            <li id="ServiceList11"><span>User Training: </span> "We offer tailored training programs to help your employees maximize their IT skills and efficiency. Our training covers a wide range of software, hardware, and cybersecurity best practices."</li>
            <li id="ServiceList12"><span>Software & Hardware Updates: </span> "We manage and implement software updates to ensure security and optimal performance. We also monitor hardware health and proactively address any potential issues, preventing downtime and ensuring long-term reliability."</li>
          </ul>
        </div>
        <div class="with-img">
          <img src="imgs/Oservice3.png" class="img-fluid">
          <button class="position-absolute bottom-0 start-50 translate-middle-x">See Details</button>
        </div>
      </div>
    </div>


    <div class="service1 position-relative pb-5" id="Communication+HR+Consulting">
      <div class="service1-contents container-xlg">
        <div class="with-img">
          <img src="imgs/Oservice4.png" class="img-fluid">
          <button class="position-absolute bottom-0 start-50 translate-middle-x">See Details</button>
        </div>
        <div>
          <div class="service-head">
            <h3 id="ServiceHeader4">Communication & HR Consulting</h3>
            <p><span>></span><span>></span><span>></span></p>          
          </div>
          <h5 class="h5" id="ServiceSubHeader4">Strengthen Your Brand and Build a High-Performing Team</h5>
          <p id="ServiceP4">"LK GROUP provides strategic communication and HR consulting services to help you build a strong brand, engage your target audience, and cultivate a high-performing workplace."</p>
          <ul>
            <li id="ServiceList13"><span>Communication Strategy: </span> "We develop comprehensive communication strategies to ensure your messaging is consistent, impactful, and resonates with your target audience. We help you identify key messages, target audiences, and the best communication channels for your goals."</li>
            <li id="ServiceList14"><span>Branding: </span> "We craft a strong brand identity that reflects your values, mission, and vision. We create a cohesive brand experience across all your marketing materials, online presence, and employee communications."</li>
            <li id="ServiceList15"span>HR Consulting: </span> "We provide expert guidance on all aspects of human resources management, including recruitment, onboarding, performance management, and employee engagement."</li>
            <li id="ServiceList16"><span>Talent Acquisition: </span> "We leverage our network and innovative recruitment strategies to identify and attract top talent. We help you build a strong talent pipeline and find the best people for your organization."</li>
          </ul>
        </div>
      </div>
    </div>

    <h3 class="why-header h3 text-center" style="color: #343973;" id="WhyChooseUs">Why Choose Us?</h3>
    <p class="why-subheader mt-3 text-center text-light" id="WhyChooseUsP">Leading technology solutions since 2010</p>

    <div class="row why-choose">
      <div class="col">
        <div class="d-flex justify-content-between">
          <h4 class="h4" id="WhyChooseUsH1">13+ Years</h1>
          <img src="icons/icon1.svg">
        </div>
        <p id="WhyChooseUsP1">Of Experience Proven track record of delivering exceptional results</p>
      </div>
      <div class="col">
        <div class="d-flex justify-content-between">
          <h4 class="h4" id="WhyChooseUsH2">Expert team</h1>
          <img src="icons/icon2.svg">
        </div>
        <p id="WhyChooseUsP2">Certified professionals dedicated to your success.</p>
      </div>
      <div class="col">
        <div class="d-flex justify-content-between">
          <h4 class="h4" id="WhyChooseUsH3">Complete solutions</h1>
          <img src="icons/icon3.svg">
        </div>
        <p id="WhyChooseUsP3">End-to-end services covering all your technology needs</p>
      </div>
    </div>
  </div>

  
  <div class="footer">
        <div>
          <img src="imgs/logo1.png" alt="logo">
          <h5 id="footerH4">LK GROUP</h5>
        </div>
        <div>
          <h4 id="footerMenu1">Resources</h4>
          <a href="home.php#about" id="footerMenuLink1">Home</a>
          <a href="#service-sec" id="footerMenuLink2" class="active">Services</a>
          <a href="about.php" id="footerMenuLink3">About</a>
          <a href="contact.php" id="footerMenuLink4">Contact Us</a>
        </div>
        <div>
          <h4 id="footerMenu2">Support</h4>
          <a href="home.php#faq-sec" id="footerMenuLink5">FAQs</a>
          <a href="contact.php#help" id="footerMenuLink6">Help</a>
        </div>
        <div>
          <h4 id="footerMenu3">Company</h4>
          <a href="about.php#mission-sec" id="footerMenuLink7">Our Mission</a>
          <a href="about.php#mission-sec" id="footerMenuLink8">Our Objective</a>
          <a href="about.php#mission-sec" id="footerMenuLink9">Our Values</a>
          <a href="about.php#team-sec" id="footerMenuLink10">Our Team</a>
        </div>
        <div>
          <h4 id="footerMenu4">Useful Links</h4>
          <a href="about.php#how-sec" id="footerMenuLink11">How we work</a>
          <a href="#service-sec"id="footerMenuLink12">What we do</a>
        </div>
        <div>
          <h4 id="footerMenu5">Social</h4>
          <div class="footer-social">
            <a href="#" id="footerMenuLink13"><img src="icons/linkedin.svg"></a>
            <a href="#" id="footerMenuLink14"><img src="icons/x.svg"><a>
            <a href="#" id="footerMenuLink15"><img src="icons/insta.svg"></</a>
          </div>
        </div>
    </div>
</div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
    const searchIcon = document.querySelector('.header-search');
    const searchBar = document.querySelector('.search-bar');
    const form = document.querySelector('.form');

    // Toggle the search bar visibility when clicking the search icon
    searchIcon.addEventListener('click', (event) => {
      event.stopPropagation(); // Prevent the click from propagating to the document
      searchBar.classList.add('active'); // Toggle the "active" class to show/hide the input
    });

    // Close the search bar if clicking outside the search area
    document.addEventListener('click', (event) => {
      if (!searchIcon.contains(event.target) && !searchBar.contains(event.target)) {
        searchBar.classList.remove('active'); // Hide the search bar if clicked outside
      }
    });

  </script>
  <script src="js/ServicesLanguageToggle.js"></script> 
</body>
</html>