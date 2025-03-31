<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="about.css">
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
  </style>
</head>
<body>
<div class="page">

  <div class="navigation-container">
  <div class="real-header">
    <img src="imgs/logo.png" alt="logo" class="logo" />
    
    <div class="header-navigation">
      <a href="home.php" id="homeLink">Home</a>
      <a href="services.php" id="servicesLink">Services</a>
      <a href="#about" class="active" id="aboutLink">About Us</a>
      <a href="contact.php" id="contactLink">Contact Us</a>
    </div>

    <div class="header-links">
      <svg xmlns="http://www.w3.org/10000/svg" class="header-search" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="11" cy="11" r="8"></circle>
        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
      </svg>
      <form action="" class="form"><input type="search" class="search-bar" placeholder="Search..." /></form>
    </div>

    <button class="lang-btn d-flex" onclick="toggleLanguage()"><img src="icons/language.svg"><span id="languageBtn"></span></button>

    <button class="hamburger btn btn-primary" style="background-color:transparent;border:none;" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">
      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#2BADE2" class="bi bi-list" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5"/>
      </svg>
    </button>

      <div class="offcanvas offcanvas-end" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasTopLabel" style="color: #13AEEE;">MENUS</h5>
          <button type="button me-2" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
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


  <div class="about-container">
    <div class="about-hero">
      <img src="imgs/about-bg.jfif" class="img-fluid">
      <div class="hero-contents">
        <h1 id="AboutHero">ABOUT <span>US</span></h1>
        <p class="text-center" id="HeroText">“LK GROUP is a unique and dynamic company dedicated to helping businesses thrive in today's digital landscape”.</p>
      </div>
    </div>
  </div>

  <div class="about-contents">
  <img src="imgs/about-big-bg.png" class="img-fluid about-contents-bg">
  <section class="story">
    <div class="story-head">
      <h3 id="OurStory">Our Story</h3>
      <button id="ContactButton">Contact Us</button>
    </div>
    <p id="StoryText">L<span>K</span> GROUP was founded in 2010 by a small team of passionate IT professionals who believed in the power of technology to empower businesses and individuals. Driven by a shared desire to create a more connected and secure digital world, they started by providing local IT support and consulting services to small businesses in their community. As their reputation for excellence grew, so did their client base, which led to the expansion of their service oWerings. LK GROUP quickly became known for their innovative solutions and their dedication to exceeding client expectations. Today, LK GROUP has evolved into a leading technology solutions provider, serving clients across various industries and sectors. The company's commitment to innovation, customer satisfaction, and a strong ethical foundation has remained steadfast throughout its growth, making it a trusted partner for businesses seeking to navigate the complexities of the digital age.</p>
  </section>

  <section class="mission">
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="mission-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab" aria-controls="mission" aria-selected="true">Mission</button>
          <button class="nav-link" id="vision-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab" aria-controls="vision" aria-selected="false">Vision</button>
          <button class="nav-link" id="values-tab" data-bs-toggle="tab" data-bs-target="#values" type="button" role="tab" aria-controls="values" aria-selected="false">Values</button>
      </div>
    </nav>

    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active with-grid" id="mission" role="tabpanel" aria-labelledby="mission-tab" tabindex="0">
          <div class="for-grid">
          <div>
            <p class="w-100 md:w-75" id="OurMission">To empower businesses with seamless technology solutions that drive growth, efficiency, and innovation.</p>
          </div>
          <div>
            <img src="imgs/service1copy.png">
          </div>
          <div>
            <p id="OurMission2">We are dedicated to providing businesses with cutting-edge, scalable solutions that not only help them thrive in a rapidly changing digital landscape but also foster long-term growth, operational efficiency, and continuous innovation. Our goal is to be a trusted partner in their digital transformation journey.</p>
          </div>
          </div>
        </div>
        <div class="tab-pane fade with-grid two" id="vision" role="tabpanel" aria-labelledby="vision-tab" tabindex="0">
        <div class="for-grid">
          <div>
          <img src="imgs/service1copy.png">
          </div>
          <div>
            <p class="w-100 md:w-75" id="OurVision">To become the leading provider of comprehensive digital solutions, enabling
            businesses to thrive in a rapidly evolving digital landscape.</p>
          </div>
          <div>
            <p id="OurVision2">To empower businesses with seamless technology solutions that drive growth, enhance operational efficiency, and foster continuous innovation. Our goal is to provide businesses with the tools they need to succeed in a digital-first world, adapting to new challenges and staying ahead of the competition.</p>
          </div>
          </div>        </div>
        <div class="tab-pane fade" id="values" role="tabpanel" aria-labelledby="values-tab" tabindex="0">
        <ul>
            <li id="integrity"><span>Integrity:</span> We operate with honesty and transparency, building trust with our clients and partners.</li>
            <li id="Focus"><span>Customer Focus:</span> Our clients are at the heart of everything we do. We are committed to delivering exceptional service and exceeding expectations.</li>
            <li id="innovation"><span>Innovation:</span> We embrace new technologies and ideas, constantly seeking ways to improve our solutions and create value for our clients.</li>
            <li id="collaboration"><span>Collaboration:</span> We believe in the power of collaboration, working closely with our clients and partners to achieve shared goals.</li>
            <li id="excellence"><span>Excellence:</span> We strive for excellence in everything we do, from the quality of our services to the professionalism of our team.</li>
            
        </ul>
        </div>
    </div>
  </section>
  

 <section class="team">
    <div class="team-head">
      <h3 id="OurTeam">Our Team</h3>
    </div>
    <div class="team-cards">
      <div class="card-slide-holder w-100 h-100 d-flex swiper">
      <div class="card-slide w-100 h-100 d-flex justify-content-between swiper-wrapper">
      <div class="team-card swiper-slide">
        <img src="imgs/member1.png" class="member">
        <div class="bg-1"></div>
        <div class="bg-2"></div>
        <div class="basic-info">
          <div>
            <h4 id="member1">Kelly NATACHA</h4>
            <a href=""><img src="icons/mail.svg"></a>
          </div>
          <p id="position1">CEO - Chief Executive Officer</p>
        </div>
        <div class="other-info">
        <p id="text1">"Every individual has the potential to contribute significantly to the workplace." – Kelly Natacha, CEO</p>
        <p id="text2">Under Kelly Natacha's leadership, LK Group empowers organizations to thrive through innovation and social impact, fostering workplaces where talent and performance excel.</p>
          <div>
            <a href=""><img src="icons/insta.svg"></a>
            <a href=""><img src="icons/linkedin.svg"></a>
            <a href=""><img src="icons/x.svg"></a>
          </div>
        </div>
      </div>
      <div class="team-card swiper-slide">
        <img src="imgs/member1.png" class="member">
        <div class="bg-1"></div>
        <div class="bg-2"></div>
        <div class="basic-info">
          <div>
            <h4 id="member2">Kelly NATACHA</h4>
            <a href=""><img src="icons/mail.svg"></a>
          </div>
          <p id="position2">CEO - Chief Executive Officer</p>
        </div>
        <div class="other-info">
        <p id="text3">"Every individual has the potential to contribute significantly to the workplace." – Kelly Natacha, CEO</p>
        <p id="text4">Under Kelly Natacha's leadership, LK Group empowers organizations to thrive through innovation and social impact, fostering workplaces where talent and performance excel.</p>
          <div>
            <a href=""><img src="icons/insta.svg"></a>
            <a href=""><img src="icons/linkedin.svg"></a>
            <a href=""><img src="icons/x.svg"></a>
          </div>
        </div>
      </div>
      <div class="team-card swiper-slide">
        <img src="imgs/member1.png" class="member">
        <div class="bg-1"></div>
        <div class="bg-2"></div>
        <div class="basic-info">
          <div>
            <h4 id="member3">Kelly NATACHA</h4>
            <a href=""><img src="icons/mail.svg"></a>
          </div>
          <p id="position3">CEO - Chief Executive Officer</p>
        </div>
        <div class="other-info">
        <p id="text5">"Every individual has the potential to contribute significantly to the workplace." – Kelly Natacha, CEO</p>
        <p id="text6">Under Kelly Natacha's leadership, LK Group empowers organizations to thrive through innovation and social impact, fostering workplaces where talent and performance excel.</p>
          <div>
            <a href=""><img src="icons/insta.svg"></a>
            <a href=""><img src="icons/linkedin.svg"></a>
            <a href=""><img src="icons/x.svg"></a>
          </div>
        </div>
      </div>
      <div class="team-card swiper-slide">
        <img src="imgs/member1.png" class="member">
        <div class="bg-1"></div>
        <div class="bg-2"></div>
        <div class="basic-info">
          <div>
            <h4 id="member4">Kelly NATACHA</h4>
            <a href=""><img src="icons/mail.svg"></a>
          </div>
          <p id="position4">CEO - Chief Executive Officer</p>
        </div>
        <div class="other-info">
        <p id="text7">"Every individual has the potential to contribute significantly to the workplace." – Kelly Natacha, CEO</p>
        <p id="text8">Under Kelly Natacha's leadership, LK Group empowers organizations to thrive through innovation and social impact, fostering workplaces where talent and performance excel.</p>
          <div>
            <a href=""><img src="icons/insta.svg"></a>
            <a href=""><img src="icons/linkedin.svg"></a>
            <a href=""><img src="icons/x.svg"></a>
          </div>
        </div>
      </div>
      <div class="team-card swiper-slide">
        <img src="imgs/member1.png" class="member">
        <div class="bg-1"></div>
        <div class="bg-2"></div>
        <div class="basic-info">
          <div>
            <h4 id="member5">Kelly NATACHA</h4>
            <a href=""><img src="icons/mail.svg"></a>
          </div>
          <p id="position5">CEO - Chief Executive Officer</p>
        </div>
        <div class="other-info">
        <p id="text9">"Every individual has the potential to contribute significantly to the workplace." – Kelly Natacha, CEO</p>
        <p id="text10">Under Kelly Natacha's leadership, LK Group empowers organizations to thrive through innovation and social impact, fostering workplaces where talent and performance excel.</p>
          <div>
            <a href=""><img src="icons/insta.svg"></a>
            <a href=""><img src="icons/linkedin.svg"></a>
            <a href=""><img src="icons/x.svg"></a>
          </div>
        </div>
      </div>
      <div class="team-card swiper-slide">
        <img src="imgs/member1.png" class="member">
        <div class="bg-1"></div>
        <div class="bg-2"></div>
        <div class="basic-info">
          <div>
            <h4 id="member6">Kelly NATACHA</h4>
            <a href=""><img src="icons/mail.svg"></a>
          </div>
          <p id="position6">CEO - Chief Executive Officer</p>
        </div>
        <div class="other-info">
          <p id="text11">“Every individual has the potential to achieve amazing things.”</p>
          <p id="text12">It's a passion that fuels everything, we do at LK RECRUITMENT we believe in a world where talent flourishes.</p>
          <div>
            <a href=""><img src="icons/insta.svg"></a>
            <a href=""><img src="icons/linkedin.svg"></a>
            <a href=""><img src="icons/x.svg"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-button-next swiper-btn"></div>
    <div class="swiper-button-prev swiper-btn"></div>
    </div>
    <div class="swiper-pagination"></div>
  </section>



  <section class="work">
    <div class="work-head">
      <h3 id="HowWeWork">How do we work?</h3>
    </div>
    <div class="work-contents">
    <div class="left-side">
      <div class="work-side">
        <div class="work-card">
          <h4>01</h4>
          <p id="step1">Businesses contact us with their staffing requirements.</p>
        </div>
      </div>
      <div class="work-side">
        <div class="work-card">
          <h4>03</h4>
          <p id="step2">We match the best-suited candidates with the job requirements and facilitate the placement process.</p>
        </div>
      </div>
    </div>
    <div class="right-side">
      <div class="work-side">
        <div class="work-card">
          <h4>02</h4>
          <p id="step3">We source and screen qualified and trained candidates from our pool of temporary workers.</p>
        </div>
      </div>
      <div class="work-side">
        <div class="work-card">
          <h4>04</h4>
          <p id="step4">We provide ongoing support and assistance to ensure a successful temporary work arrangement.</p>
        </div>
      </div>
    </div>


  </section>
</div>
<div class="footer">
        <div>
          <img src="imgs/logo1.png" alt="logo">
          <h5 id="footerH4">LK GROUP</h5>
        </div>
        <div>
          <h4 id="footerMenu1">Resources</h4>
          <a href="#" id="footerMenuLink1">Home</a>
          <a href="#" id="footerMenuLink2">Services</a>
          <a href="#" id="footerMenuLink3" class="active">About</a>
          <a href="#" id="footerMenuLink4">Contact Us</a>
        </div>
        <div>
          <h4 id="footerMenu2">Support</h4>
          <a href="#" id="footerMenuLink5">FAQs</a>
          <a href="#" id="footerMenuLink6">Help</a>
        </div>
        <div>
          <h4 id="footerMenu3">Company</h4>
          <a href="#" id="footerMenuLink7">Our Mission</a>
          <a href="#" id="footerMenuLink8">Our Objective</a>
          <a href="#" id="footerMenuLink9">Our Values</a>
          <a href="#" id="footerMenuLink10">Our Team</a>
        </div>
        <div>
          <h4 id="footerMenu4">Useful Links</h4>
          <a href="#" id="footerMenuLink11">How we work</a>
          <a href="#"id="footerMenuLink12">What we do</a>
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
 <script src="js/AboutUSLanguageToggle.js"></script> 
<script src="js/bootstrap.bundle.min.js"></script>
<script>
      function updateSlideOpacity() {
      const slides = document.querySelectorAll('.swiper-slide'); // Get all slides
      const swiperWrapper = document.querySelector('.swiper-wrapper'); // Get the wrapper

      slides.forEach(slide => {
        slide.style.opacity = "0.6"; // Default opacity for all slides
        slide.style.transform = "scale(.8)"; // Reset scale
      });

      // Find the center slide
      let centerIndex = Math.floor(slides.length / 2); // Get the middle index
      let centerSlide = slides[centerIndex]; // Find the middle slide

      // Highlight the center slide
      if (centerSlide) {
        centerSlide.style.opacity = "1";
        centerSlide.style.transform = "scale(1)";
      }
    }

    // Run once when page loads
    setTimeout(updateSlideOpacity, 1);

  </script>
  <script type="text/javascript">
    function updateSlideOpacity() {
  const slides = document.querySelectorAll('.swiper-slide'); // Get all slides
  const swiperWrapper = document.querySelector('.swiper-wrapper'); // Get the wrapper

  slides.forEach(slide => {
    slide.style.opacity = "0.6"; // Default opacity for all slides
    slide.style.transform = "scale(0.8)"; // Reset scale
  });

  // Find the currently active slide (center)
    const activeSlide = document.querySelector('.swiper-slide-active'); // Get the active slide
    if (activeSlide) {
      activeSlide.style.opacity = "1"; // Highlight active slide with full opacity
      activeSlide.style.transform = "scale(1)"; // Scale up active slide
    }
  }

  const swiper = new Swiper('.swiper', {
  loop: true,
  centeredSlides: true,  // Keep the active slide centered
  slidesPerView: 'auto', // Auto adjust to fit slides, which helps in making partial slides visible
  spaceBetween: 0, // Adjust the space between slides to make them peek in
  autoplay: {
    delay: 3000,
    disableOnInteraction: false
  },
  keyboard: {
    enabled: true,
  },
  pagination: {
    el: '.swiper-pagination', // Pagination element
    clickable: true, // Allow clicking to go to specific slides
    type: 'bullets', // Bullet type pagination
    dynamicBullets: true,
  },
  navigation: {
    nextEl: '.swiper-button-next', // Next button
    prevEl: '.swiper-button-prev', // Previous button
  },
  on: {
    slideChange: function () {
      setTimeout(updateSlideOpacity, 100); // Update opacity after slide change
    },
  }
});
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
  <script src="js/languageToggle.js"></script> 
</body>
</html>
