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
    }
  </style>
</head>
<body>
<div class="page">
  <div class="navigation-container p-3">
    <img src="imgs/logo.png" alt="logo" class="logo" />
    
    <div class="header-navigation">
      <a href="home.php">Home</a>
      <a href="services.php" >Services</a>
      <a href="about.php" class="active">About Us</a>
      <a href="contact.php">Contact Us</a>
    </div>

    <div class="header-links">
      <svg xmlns="http://www.w3.org/10000/svg" class="header-search" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="11" cy="11" r="8"></circle>
        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
      </svg>
      <a href="/how-it-works">How it Works</a>
      <a href="/faqs">FAQs</a>
    </div>
  </div>
  <div class="about-container">
    <div class="about-hero">
      <img src="imgs/about-bg.jfif" class="img-fluid">
      <div class="hero-contents">
        <h1>ABOUT <span>US</span></h1>
        <p class="text-center">“LK GROUP is a unique and dynamic company dedicated to helping businesses thrive in today's digital landscape”.</p>
      </div>
    </div>
  </div>

  <div class="about-contents">
  <img src="imgs/about-big-bg.png" class="img-fluid about-contents-bg">
  <section class="story">
    <div class="story-head">
      <h3>Our Story</h3>
      <button>Contact Us</button>
    </div>
    <p>L<span>K</span> GROUP was founded in 2010 by a small team of passionate IT professionals who believed in the power of technology to empower businesses and individuals. Driven by a shared desire to create a more connected and secure digital world, they started by providing local IT support and consulting services to small businesses in their community. As their reputation for excellence grew, so did their client base, which led to the expansion of their service oWerings. LK GROUP quickly became known for their innovative solutions and their dedication to exceeding client expectations. Today, LK GROUP has evolved into a leading technology solutions provider, serving clients across various industries and sectors. The company's commitment to innovation, customer satisfaction, and a strong ethical foundation has remained steadfast throughout its growth, making it a trusted partner for businesses seeking to navigate the complexities of the digital age.</p>
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
        <div class="tab-pane fade show active" id="mission" role="tabpanel" aria-labelledby="mission-tab" tabindex="0">
          <div>
            <p>To empower businesses with seamless technology solutions that drive growth, efficiency, and innovation.</p>
          </div>
          <div>
            <img src="imgs/service1copy.png">
          </div>
          <div>
            <p>LK GROUP is a unique and dynamic company dedicated to helping businesses thrive in today's digital landscape. We oAer a comprehensive suite of services, tailored to address the specific challenges and opportunities faced by modern organizations.</p>
          </div>
        </div>
        <div class="tab-pane fade" id="vision" role="tabpanel" aria-labelledby="vision-tab" tabindex="0">Vision Content</div>
        <div class="tab-pane fade" id="values" role="tabpanel" aria-labelledby="values-tab" tabindex="0">Values Content</div>
    </div>
  </section>
  

 <section class="team">
    <div class="team-head">
      <h3>Our Team</h3>
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
            <h4>Loneto Kelly</h4>
            <a href=""><img src="icons/mail.svg"></a>
          </div>
          <p>CEO - Chief Executive Officer</p>
        </div>
        <div class="other-info">
          <p>“Every individual has the potential to achieve amazing things.”</p>
          <p>It's a passion that fuels everything, we do at LK RECRUITMENT we believe in a world where talent flourishes.</p>
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
            <h4>Loneto Kelly</h4>
            <a href=""><img src="icons/mail.svg"></a>
          </div>
          <p>CEO - Chief Executive Officer</p>
        </div>
        <div class="other-info">
          <p>“Every individual has the potential to achieve amazing things.”</p>
          <p>It's a passion that fuels everything, we do at LK RECRUITMENT we believe in a world where talent flourishes.</p>
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
            <h4>Loneto Kelly</h4>
            <a href=""><img src="icons/mail.svg"></a>
          </div>
          <p>CEO - Chief Executive Officer</p>
        </div>
        <div class="other-info">
          <p>“Every individual has the potential to achieve amazing things.”</p>
          <p>It's a passion that fuels everything, we do at LK RECRUITMENT we believe in a world where talent flourishes.</p>
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
            <h4>Loneto Kelly</h4>
            <a href=""><img src="icons/mail.svg"></a>
          </div>
          <p>CEO - Chief Executive Officer</p>
        </div>
        <div class="other-info">
          <p>“Every individual has the potential to achieve amazing things.”</p>
          <p>It's a passion that fuels everything, we do at LK RECRUITMENT we believe in a world where talent flourishes.</p>
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
            <h4>Loneto Kelly</h4>
            <a href=""><img src="icons/mail.svg"></a>
          </div>
          <p>CEO - Chief Executive Officer</p>
        </div>
        <div class="other-info">
          <p>“Every individual has the potential to achieve amazing things.”</p>
          <p>It's a passion that fuels everything, we do at LK RECRUITMENT we believe in a world where talent flourishes.</p>
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
            <h4>Loneto Kelly</h4>
            <a href=""><img src="icons/mail.svg"></a>
          </div>
          <p>CEO - Chief Executive Officer</p>
        </div>
        <div class="other-info">
          <p>“Every individual has the potential to achieve amazing things.”</p>
          <p>It's a passion that fuels everything, we do at LK RECRUITMENT we believe in a world where talent flourishes.</p>
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
      <h3>How do we work?</h3>
    </div>
    <div class="work-contents">
    <div class="left-side">
      <div class="work-side">
        <div class="work-card">
          <h4>01</h4>
          <p>Businesses contact us with their staffing requirements.</p>
        </div>
      </div>
      <div class="work-side">
        <div class="work-card">
          <h4>03</h4>
          <p>We match the best-suited candidates with the job requirements and facilitate the placement process.</p>
        </div>
      </div>
    </div>
    <div class="right-side">
      <div class="work-side">
        <div class="work-card">
          <h4>02</h4>
          <p>We source and screen qualified and trained candidates from our pool of temporary workers.</p>
        </div>
      </div>
      <div class="work-side">
        <div class="work-card">
          <h4>04</h4>
          <p>We provide ongoing support and assistance to ensure a successful temporary work arrangement.</p>
        </div>
      </div>
    </div>


  </section>
</div>
<div class="footer">
        <div>
          <img src="imgs/logo1.png" alt="logo">
          <h5>LK GROUP</h5>
        </div>
        <div>
          <h4>Resources</h4>
          <a href="#">Home</a>
          <a href="#">Services</a>
          <a href="#" class="active">About</a>
          <a href="#">Contact Us</a>
        </div>
        <div>
          <h4>Support</h4>
          <a href="#">FAQs</a>
          <a href="#">Help</a>
        </div>
        <div>
          <h4>Company</h4>
          <a href="#">Our Mission</a>
          <a href="#">Our Objective</a>
          <a href="#">Our Values</a>
          <a href="#">Our Team</a>
        </div>
        <div>
          <h4>Useful Links</h4>
          <a href="#">How we work</a>
          <a href="#">What we do</a>
        </div>
        <div>
          <h4>Social</h4>
          <div class="footer-social">
            <a href="#"><img src="icons/linkedin.svg"></a>
            <a href="#"><img src="icons/x.svg"><a>
            <a href="#"><img src="icons/insta.svg"></</a>
          </div>
        </div>
    </div>
      </div>
  </div>
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
</body>
</html>
