<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="home.css">
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
        position: relative;
    }


</style>
</head>
<body>
<div class="page">

  <div class="navigation-container w-100">
    <div class="real-header">
    <img src="imgs/logo.png" alt="logo" class="logo" />
    
    <div class="header-navigation">
      <a href="#home" id="homeLink" class="active">Home</a>
      <a href="services.php" id="servicesLink">Services</a>
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
          <button type="button me-2" class="btn-close btn-close-dark" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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

  <div class="home-container">
    <div class="container-xlg home-hero">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imgs/newbg.jfif" alt="" class="d-block w-100 home-bg-hero">
            </div>
        </div>
    </div>

      <div class="home-hero-contents">
        <div class="home-hero-left">
          <!-- Custom Carousel with Unique Classes -->
          <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <h1 id="carouselTitle1">HR & Communication</h1>
                <p id="carouselText1">Tailored solutions for modern businesses to thrive in a fast-paced digital world.</p>
              </div>
              <div class="carousel-item">
                <h1 id="carouselTitle2">Your Growth, Our Mission</h1>
                <p id="carouselText2">Transforming challenges into opportunities with customized services for your business.</p>
              </div>
              <div class="carousel-item">
                <h1 id="carouselTitle3">Innovative Solutions for Modern Businesses</h1>
                <p id="carouselText3">Helping organizations unlock their full potential in today’s digital landscape.</p>
              </div>
            </div>
          </div>

          <button class="get-started" id="getStartedBtn">Get Started</button>
          <div class="home-hero-navs">
            <button id="prevBtn"><img src="icons/prev.svg"></button>
            <button id="nextBtn"><img src="icons/next.svg"></button>
          </div>
        </div>

        <div class="home-hero-right">
          <div class="home-hero-right-bg">
            <div id="carouselExampleFade" class="carousel slide carousel-fade w-100" data-bs-ride="carousel" data-bs-pause="false" style="position: relative;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="imgs/phone-bg1.png" alt="" class="hero-phone-image img-fluid">
                    </div>
                    <div class="carousel-item w-100">
                      <img src="imgs/phone-bg2.png" alt="" class="hero-phone-image img-fluid h-100">
                    </div>
                    <div class="carousel-item w-100">
                      <img src="imgs/phone-bg3.png" alt="" class="hero-phone-image img-fluid">
                    </div>
                </div>
            </div>
            <div class="floating-service one">
              <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                <div class="carousel-inner">
                  <div class="carousel-item bg active">
                    <p id="serviceOneText1">Digital Presence in</p>
                    <h2 id="serviceOneTitle1">Social Media</h2>
                  </div>
                  <div class="carousel-item bg">
                    <p id="serviceOneText2">Cybersecurity in</p>
                    <h2 id="serviceOneTitle2">Assessment</h2>
                  </div>
                  <div class="carousel-item bg">
                    <p id="serviceOneText3">IT Support in</p>
                    <h2 id="serviceOneTitle3">Remote Updates</h2>
                  </div>
                </div>
              </div>
            </div>

            <!-- Floating Service Two -->
            <div class="floating-service two">
              <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                <div class="carousel-inner">
                  <div class="carousel-item bg active">
                    <p id="serviceTwoText1">Digital Presence in</p>
                    <h2 id="serviceTwoTitle1">Web Design</h2>
                  </div>
                  <div class="carousel-item bg">
                    <p id="serviceTwoText2">Cybersecurity in</p>
                    <h2 id="serviceTwoTitle2">Incidents Response</h2>
                  </div>
                  <div class="carousel-item bg">
                    <p id="serviceTwoText3">IT Support in</p>
                    <h2 id="serviceTwoTitle3">Interventions Reporting</h2>
                  </div>
                </div>
              </div>
            </div>

            <!-- Floating Service Three -->
            <div class="floating-service three">
              <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                <div class="carousel-inner">
                  <div class="carousel-item bg active">
                   <p id="serviceThreeText1">Digital Presence in</p>
                   <h2 id="serviceThreeTitle1">Contents Creation</h2>
                  </div>
                  <div class="carousel-item bg">
                    <p id="serviceThreeText2">Cybersecurity in</p>
                    <h2 id="serviceThreeTitle2">Solutions</h2>
                  </div>
                  <div class="carousel-item bg">
                    <p id="serviceThreeText3">IT Support in</p>
                    <h2 id="serviceThreeTitle3">Ticketing</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <img src="imgs/Union.png" class="home-union-hero" />
      <img src="imgs/union2.png" class="home-union1-hero" />

      <div class="home-hero-footer">
        <div>
          <h5 id="ticketsDelivered">1M+</h5>
          <p id="ticketsDeliveredText">Tickets Delivered This Month</p>
        </div>
        <div>
          <h5 id="activeCustomers">53K+</h5>
          <p id="activeCustomersText">Active Customers Rate</p>
        </div>
        <div>
          <h5 id="customerSatisfaction">98.27%</h5>
          <p id="customerSatisfactionText">Customer Satisfaction Rate</p>
        </div>
      </div>
    </div>



    <div class="about" id="about">
      <div class="text-in-bg"><h1 id="aboutTitle">ABOUT US</h1></div>
      <h1 class="about-header" id="knowUsTitle">GET TO <span>KNOW</span> US !</h1>
      <div class="about-contents">
      <h2  class="about-tech-solutions" id="techSolutionsTitle">
  Tech Solutions <span>></span><span>></span><span>></span>
</h2>
        <div class="about-contents-container shadow-lg">
          <img src="imgs/about3.png">
          <img src="imgs/about2.png">
          <img src="imgs/about1.png">
          <div>
            <p id="aboutText">At LK Group  we offer cutting-edge solutions that address pressing Technology challenges. Our focus on research innovation leads to sustainable practices and policies that benefit communities globally.</p>
            <p id="aboutParagraph" class="about-paragraph">
              Innovate with confidence! Explore the future of IT infrastructure and
              how we lead the way with cutting edge solutions.
            </p>

            <button id="learnMoreBtn">Learn more</button>
          </div>
          
        </div>
        <div class="shadows"></div>
        <!-- <div class="partners">
          <h1>OUR PARTNERS</h1>
          <div>
            <img src="imgs/about3.png">
            <img src="imgs/img1.jfif">
            <img src="imgs/about3.png">
            <img src="imgs/about3.png">
            <img src="imgs/img1.jfif">
            <img src="imgs/about3.png">
          </div>  
        </div> -->
      </div>
    </div>

    <div class="services container-xlg">
      <div class="text-in-bg"><h1>SERVICES</h1></div>
      <h1 class="services-header" id="WeOffer">WHAT WE <span>OFFER !</span></h1>
      <div class="services-contents">
        <div class="services-card shadow">
          <img src="icons/people.svg" alt="" class="service_icon">
          <h3 id="OfferTitle1">HR Consulting</h3>
          <p id="OfferText1">Strategic HR solutions and talent acquisition services.</p>
          <img src="imgs/service1.png">
          <a href="services.php#Communication+HR+Consulting"><span><img src="icons/next.svg"></span></a>
        </div>
        <div class="services-card shadow">
          <img src="icons/global.svg" alt="" class="service_icon">
          <h3 id="OfferTitle2">Digital Presence</h3>
          <p id="OfferText2">Web design, social media management, and content creation services.</p>
          <img src="imgs/service2.png">
          <a href="services.php#Digita+Presence"><span><img src="icons/next.svg"></span></a>
        </div>
        <div class="services-card shadow">
          <img src="icons/shield-security.svg" alt="" class="service_icon">
          <h3 id="OfferTitle3">Cyber Security </h3>
          <p id="OfferText3">Comprehensive security solutions and incident response services.</p>
          <img src="imgs/service3.png">
          <a href="services.php#Cyber+Security"><span><img src="icons/next.svg"></span></a>
        </div>
        <!--<div class="services-card">
          <img src="icons/monitor-mobbile.svg" alt="">
          <h3 id="OfferTitle4">IT Support</h3>
          <p id="OfferText4">24/7 remote assistance,ticketing system, and technical support.</p>
          <img src="imgs/service4.png">
          <a href="services.php#IT+Support"><span>></span></a>
        </div>
        <div class="services-card">
          <img src="icons/box.png" alt="">
          <h3 id="OfferTitle5">Staff & Management</h3>
          <p id="OfferText5">Web design, social media management, and content creation services.</p>
          <img src="imgs/service5.png">
          <span>></span>
        </div>
        <div class="services-card">
          <img src="icons/like-tag.svg" alt="">
          <h3 id="OfferTitle6">Job Opportunities</h3>
          <p id="OfferText6">You want a fine digital solver, here is the right place.</p>
          <img src="imgs/service6.png">
          <span>></span>
        </div>-->

      </div>
    </div>



    <div class="testimonials">
        <div class="text-in-bg"><h1 id="TestmonialHead">TESTIMONIALS</h1></div>
        <h1 class="testimonials-header" id="TestimonialTitle">WHAT OUR <span>CLIENTS </span> SAY !</h1>
        <div class="testimonials-contents">
          <div class="div-1">
            <img class="prev" src="imgs/test1.jfif">
            <img class="next" src="imgs/test2.jfif">
            <img class="active" src="imgs/test3.jfif">
            <div class="testimonial-list" style="background-image: url('imgs/test4.png');"></div>
          </div>
          <div class="div-2">
            <div id="carouselExampleFade1" class="carousel slide w-100" data-bs-ride="carousel" data-bs-pause="false">
            <div class="carousel-inner w-100">
              <div class="carousel-item active w-100">
                <h3 class="d-block w-100" id="testimonialsH1">Strategic Growth Support</h3>
                <p class="d-block w-100" id="Testifier1">Emily W. - HR Manager</p>
                <label class="d-block w-100" id="testimonialsLabel1">Working with LK GROUP has been a fantastic experience. Their HR consulting services helped us build a stronger brand and a more efficient team. They truly understand the importance of communication strategy and talent acquisition in driving business success.</label>
              </div>
              <div class="carousel-item">
                <h3 id="testimonialsH2">Expert IT Solutions</h3>
                <p id="Testifier2">James T. - CEO of Apex Solutions</p>
                <label id="testimonialsLabel2">Thanks to LK GROUP, our IT infrastructure is stronger and more secure than ever. Their cybersecurity solutions and reliable IT support have provided us with peace of mind, knowing our systems are in good hands. The team’s quick response and proactive solutions have been crucial to our business operations.</label>
              </div>
              <div class="carousel-item">
                <h3 id="testimonialsH3">Unforgettable Services</h3>
                <p id="Testifier3">ASarah M. - Marketing Director</p>
                <label id="testimonialsLabel3">LK GROUP's team transformed our digital presence. Their web design services exceeded expectations, creating a stunning and user-friendly site that has driven significant online engagement. Their approach to digital strategy truly sets them apart in this competitive space.</label>
              </div>
            </div>
          </div>
          <div class="testimonial-navs">
            <button id="prevBtn2"><img src="icons/prev.svg"></button>
            <button id="nextBtn2"><img src="icons/next.svg"></button>
          </div>
          </div>
        </div>

        <div class="ratings">
          <div>
          <h5>1M+</h5>
          <p id="rating1">Happy customers</p>
        </div>
        <div>
          <h5>53K+</h5>
          <p id="rating2">Active Customers</p>
        </div>
        <div>
          <h5>98.27%</h5>
          <p id="rating3">Customer Satisfaction Rate</p>
        </div>
        </div>

      </div>


      <div class="container-xlg blogs">
        <div class="text-in-bg"><h1 id="BlogSection">BLOGS</h1></div>
        <h1 class="blogs-header" id="WhatsNew">Explore What's <span>new !</span></h1>
        <div class="blogs-contents">
          <div class="blogs-side">
            <div class="blogs-card">
              <img src="imgs/blog4.jpg">
              <div class="blogs-card-contents">
                <div class="bg"></div>
                <h4>LK Recruitment embraces the agenda 2063, Future thrive</h4>
                <p>LK recently participated in the “One Africa, One HR” Summit...</p>
                <button>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#343973" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" stroke="#343973" stroke-width="1.8"/>
                  </svg>
                </button>

              </div>
            </div>
            <div class="blogs-card">
              <img src="imgs/blog2.png">
              <div class="blogs-card-contents">
                <div class="bg"></div>
                <h4>LK Recruitment embraces the agenda 2063, Future thrive</h4>
                <p>LK recently participated in the “One Africa, One HR” Summit...</p>
                <button>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#343973" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" stroke="#343973" stroke-width="1.8"/>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="blogs-side">
            <div class="blogs-card">
              <img src="imgs/blog3.jpg">
              <div class="blogs-card-contents">
                <div class="bg"></div>
                <h4>LK Recruitment embraces the agenda 2063, Future thrive</h4>
                <p>LK recently participated in the “One Africa, One HR” Summit...</p>
                <button>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#343973" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" stroke="#343973" stroke-width="1.8"/>
                  </svg>
                </button>
              </div>
            </div>
            <div class="blogs-card">
              <img src="imgs/blog4.png">
            </div>
            <div class="blogs-card">
              <img src="imgs/blog1.jpg">
              <div class="blogs-card-contents">
                <div class="bg"></div>
                <h4>LK Recruitment embraces the agenda 2063, Future thrive</h4>
                <p>LK recently participated in the “One Africa, One HR” Summit...</p>
                <button>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#343973" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" stroke="#343973" stroke-width="1.8"/>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="blogs-side">
            <div class="blogs-card">
              <img src="imgs/blog6.png">
              <div class="blogs-card-contents">
                <div class="bg"></div>
                <h4>LK Recruitment embraces the agenda 2063, Future thrive</h4>
                <p>LK recently participated in the “One Africa, One HR” Summit...</p>
                <button>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#343973" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" stroke="#343973" stroke-width="1.8"/>
                  </svg>
                </button>
              </div>
            </div>
            <div class="blogs-card">
              <img src="imgs/blog7.png">
              <div class="blogs-card-contents">
                <div class="bg"></div>
                <h4>LK Recruitment embraces the agenda 2063, Future thrive</h4>
                <p>LK recently participated in the “One Africa, One HR” Summit...</p>
                <button>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#343973" class="bi bi-chevron-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708" stroke="#343973" stroke-width="1.8"/>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="blog-footer">
          <button class="position-absolute top-50 start-50 translate-middle" id="seeMoreButton">See More</button>
        </div>
      </div>


      
      <div class="contact">
        <div class="text-in-bg contact-monoton"><h1 id="ContactSection">CONTACT US</h1></div>
        <h1 class="contact-header" id="ContactHead1">LET'S <span>TALK !</span></h1>
        <div class="contact-contents">
          <div class="contact-form">
            <h3 id="ContactHead2">Message <span>US !</span></h3>
            <form>
              <input type="text" name="" placeholder="Your Name">
              <input type="email" name="" placeholder="Your Email">
              <input type="text" name="" placeholder="Your Location">
              <input type="text" name="" placeholder="Services">
              <textarea placeholder="Type a message..."></textarea>
              <button class="send" id="SendButton">Send</button>
            </form>
          </div>
          <div class="contact-info">
            <h4 id="ContactHead3"><span>We are</span> open for any Suggestion by any mean of <span>communication.</span></h4>
            <div class="contact-item">
              <img src="icons/phone.svg">
              <div>
                <p>+33 7 85 60 36 92</p>

              </div>
            </div>
            <div class="contact-item">
              <img src="icons/sms.svg">
              <div>
                <p>info@lkgroupworld.com</p>
                <p>contact@lkgroupworld.com</p>
              </div>
            </div>

            <!-- <div class="contact-item">
              <img src="icons/time.svg">
              <div>
                <p>Opening time</p>
                <p>Mon - Fri (9:00 AM - 17:00 PM)</p>
              </div>
            </div> -->
            <div class="contact-item">
              <img src="icons/linkedin.svg">
              <img src="icons/x.svg">
              <img src="icons/insta.svg">
              <img src="icons/face.svg">
            </div>
          </div>
        </div>
        <div class="shadows one"></div>
        <div class="shadows two"></div>
      </div>


      <div class="faqs" id="faq-sec">
        <div class="text-in-bg"><h1 id="faqsSection">FAQs</h1></div>
        <h1 class="faqs-header" id="faqsHead">FREQUENTLY <span>ASKED </span>QUESTION !</h1>
        <div class="faqs-contents">
          <!-- Accordion -->
          <div class="accordion" id="faqAccordion">

            <!-- Section 1: What Are Digital Services We Provide? -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="WeProvide">
                        What Are Digital Services We Provide?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body" id="WeProvideText">
                        Here you can describe the digital services your company provides.
                    </div>
                </div>
            </div>

            <!-- Section 2: How do we work? -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" id="WeWork">
                        How do we work?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body" id="WeWorkText">
                        Explain how your company operates, your processes, and workflow.
                    </div>
                </div>
            </div>

            <!-- Section 3: How do I reset my password? -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree" id="toReset">
                        How do I reset my password?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body" >
                        <label id="ToResetText">If you’ve forgotten your password, follow these steps:</label>
                        <ol>
                            <li id="ToResetItem1">Click on the "Forgot Password" link on the login page.</li>
                            <li id="ToResetItem2">Enter your email address and follow the instructions in your inbox.</li>
                            <li id="ToResetItem3">Create a new password and log in again.</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Section 4: Why LK Group for Your Choice -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="" id="WhyUs">
                        Why LK Group for Your Choice
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body" id="WhyUsText">
                        Explain why users should choose LK Group, outlining the benefits, trust factors, and unique features that set you apart.
                    </div>
                </div>
            </div>
        </div>
        <div class="image-cut mt-5">
          <img src="imgs/faqs.png" class="img-fluid" alt="Styled Image">
        </div>
      </div>
      </div>

      <div class="subscribe">
        <div class="subscribe-contents">
          <div class="image-cut">
            <h2 class="ms-3 mb-3" id="ChooseUsSection">Why Choose Us?</h2>
            <ol>
              <li id="ChooseUsli1"><span>Comprehensive Solutions:</span> We offer a full range of services including digital presence, cybersecurity, IT support, and communication & HR consulting.</li>
              <li id="ChooseUsli2"><span>Tailored Services:</span> Our solutions are customized to meet the specific challenges and goals of each client.</li>
              <li id="ChooseUsli3"><span>Experienced Team:</span> With over a decade of experience, our team combines technical expertise, results-driven solutions.</li>
              <li id="ChooseUsli4"><span>Customer-Centric Approach:</span> We prioritize client satisfaction by offering personalized support.</li>
              <li id="ChooseUsli5"><span>Commitment to Innovation:</span> We stay at the forefront of new technologies and trends.</li>
            </ol>
          </div>
          <!-- <div class="subscribe-form">
            <div><h1>STAY <h1>INFORMED</h1></h1></div>
            <h1>let’s Keep You <span>updated !</span></h1>
            <form>
              <input type="email" placeholder="Type your Email" name="">
              <button>Subscribe</button>
            </form>
          </div> -->
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
          <a href="#about" id="footerMenuLink1" class="active">Home</a>
          <a href="services.php" id="footerMenuLink2">Services</a>
          <a href="about.php" id="footerMenuLink3">About</a>
          <a href="contact.php" id="footerMenuLink4">Contact Us</a>
        </div>
        <div>
          <h4 id="footerMenu2">Support</h4>
          <a href="#faq-sec" id="footerMenuLink5">FAQs</a>
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
          <a href="services.php#service-sec"id="footerMenuLink12">What we do</a>
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
      <script src="js/languageToggle.js"></script> 
<script src="js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript">
    document.getElementById("prevBtn").addEventListener("click", function () {
  document.querySelectorAll(".carousel").forEach((carousel) => {
    let instance = bootstrap.Carousel.getInstance(carousel);
    if (instance) instance.prev();
  });
});

document.getElementById("nextBtn").addEventListener("click", function () {
  document.querySelectorAll(".carousel").forEach((carousel) => {
    let instance = bootstrap.Carousel.getInstance(carousel);
    if (instance) instance.next();
  });
});

document.getElementById("prevBtn2").addEventListener("click", function () {
  document.querySelectorAll(".carousel").forEach((carousel) => {
    let instance = bootstrap.Carousel.getInstance(carousel);
    if (instance) instance.prev();
  });
});

document.getElementById("nextBtn2").addEventListener("click", function () {
  document.querySelectorAll(".carousel").forEach((carousel) => {
    let instance = bootstrap.Carousel.getInstance(carousel);
    if (instance) instance.next();
  });
});

const images = document.querySelectorAll(".testimonials-contents div:first-of-type img");
let currentIndex = 0; // Start with the first image

document.getElementById("carouselExampleFade1").addEventListener("slide.bs.carousel", function (event) {
  let nextIndex = event.to; // Get the next active slide index
  syncTestimonials(nextIndex);
});


// **Update image classes based on carousel movement**
function syncTestimonials(newIndex) {
  let prevIndex = (newIndex - 1 + images.length) % images.length;
  let nextIndex = (newIndex + 1) % images.length;

  // Reset classes
  images.forEach((img) => img.classList.remove("active", "prev", "next"));

  // Assign correct classes
  images[newIndex].classList.add("active"); // Current active image
  images[prevIndex].classList.add("prev"); // Previous image
  images[nextIndex].classList.add("next"); // Next image

  // Update current index
  currentIndex = newIndex;
}

// **Ensure correct state on first load**
syncTestimonials(0);

  </script>
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

</body>
</html> 