<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="home.css">
  <title>Lk Group | Home Page</title>
  
</head>
<body>

  <div class="navigation-container p-3">
    <img src="imgs/logo.png" alt="logo" class="logo" />
    
    <div class="header-navigation">
      <a href="#about" id="homeLink" class="active">Home</a>
      <a href="services.php" id="servicesLink">Services</a>
      <a href="about.php" id="aboutLink">About Us</a>
      <a href="contact.php" id="contactLink">Contact Us</a>
    </div>

    <div class="header-links">
      <svg xmlns="http://www.w3.org/10000/svg" class="header-search" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="11" cy="11" r="8"></circle>
        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
      </svg>
      <div class="language-toggle">
  <button id="languageBtn" class="lang-btn" onclick="toggleLanguage()">English</button>
</div>

    </div>
  </div>

  <div class="home-container">
    <div class="home-hero">
      <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imgs/img4.jfif" alt="" class="d-block w-100 home-bg-hero">
            </div>
            <div class="carousel-item">
                <img src="imgs/img5.jfif" alt="" class="d-block w-100 home-bg-hero">
            </div>
            <div class="carousel-item">
                <img src="imgs/img2.jfif" alt="" class="d-block w-100 home-bg-hero">
            </div>
        </div>
    </div>

      <div class="home-hero-contents">
        <div class="home-hero-left">
          <!-- Custom Carousel with Unique Classes -->
          <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <h1 id="corousel">HR & Communication</h1>
                <p>Tailored solutions for modern businesses to thrive in a fast-paced digital world.</p>
              </div>
              <div class="carousel-item">
                <h1>Your Growth, Our Mission</h1>
                <p>Transforming challenges into opportunities with customized services for your business.</p>
              </div>
              <div class="carousel-item">
                <h1>Innovative Solutions for Modern Businesses</h1>
                <p>Helping organizations unlock their full potential in today’s digital landscape.</p>
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
            <img src="imgs/phone.png" alt="" class="hero-phone-image">
            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-pause="false" style="position: absolute;
                  width: 74%;
                  height: 100%;
                  z-index: 1;
                  border-radius: 40px;
                  margin-left: 13px;
                  margin-top: 14px;
                  border-bottom-left-radius: 60px;
                  overflow: hidden;
              ">
              <div class="carousel-inner">
                <div class="carousel-item active" style="height: 555px;">
                  <img src="imgs/img6.jfif" alt="" class="home-hero-in-phone" style="width: 100%;height: 100%;border-radius: 40px;">
                </div>
                <div class="carousel-item" style="height: 555px;">
                  <img src="imgs/img1.jfif" alt="" class="home-hero-in-phone" style="width: 100%;height: 100%;border-radius: 40px;">
                </div>
                <div class="carousel-item" style="height: 555px;">
                  <img src="imgs/img3.jfif" alt="" class="home-hero-in-phone" style="width: 100%;height: 100%;border-radius: 40px;">
                </div>
              </div>
            </div>

            <div class="floating-service one">
              <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <p>Digital Presence in</p>
                    <h2>Social Media</h2>
                  </div>
                  <div class="carousel-item">
                    <p>Cybersecurity in</p>
                    <h2>Assessment</h2>
                  </div>
                  <div class="carousel-item">
                    <p>IT Support in</p>
                    <h2>Remote Updates</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="floating-service two">
              <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <p>Digital Presence in</p>
                    <h2>Web Design</h2>
                  </div>
                  <div class="carousel-item">
                    <p>Cybersecurity in</p>
                    <h2>Incidents Response</h2>
                  </div>
                  <div class="carousel-item">
                    <p>IT Support in</p>
                    <h2>Interventions Reporting</h2>
                  </div>
                </div>
              </div>
            </div>
            <div class="floating-service three">
              <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <p>Digital Presence in</p>
                    <h2>Contents Creation</h2>
                  </div>
                  <div class="carousel-item">
                    <p>Cybersecurity in</p>
                    <h2>Solutions</h2>
                  </div>
                  <div class="carousel-item">
                    <p>IT Support in</p>
                    <h2>Ticketing</h2>
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
          <h5>1M+</h5>
          <p>Tickets Delivered This Month</p>
        </div>
        <div>
          <h5>53K+</h5>
          <p>Active Customers Rate</p>
        </div>
        <div>
          <h5>98.27%</h5>
          <p>Customer Satisfaction Rate</p>
        </div>
      </div>
    </div>

    <div class="about" id="about">
      <div class="text-in-bg"><h1>ABOUT</h1><h1>US</h1></div>
      <h1 class="about-header">GET TO <span>KNOW</span> US !</h1>
      <div class="about-contents">
        <h2 class="about-tech-solutions">Tech Solutions <span>></span><span>></span><span>></span></h2>
        <div class="about-contents-container">
          <img src="imgs/about3.png">
          <img src="imgs/about2.png">
          <img src="imgs/about1.png">
          <div>
            <p>At LK Group  we offer cutting-edge solutions that address pressing Technology challenges. Our focus on research innovation leads to sustainable practices and policies that benefit communities globally.</p>
            <button>Learn more</button>
          </div>
          
          <p class="about-paragraph">Innovate  with confidence! Explore the future of IT infrastructure and  how  we lead the way with cutting edge solutions.</p>
        </div>
        <div class="shadows"></div>
        <div class="partners">
          <h1>OUR PARTNERS</h1>
          <div>
            <img src="imgs/about3.png">
            <img src="imgs/img1.jfif">
            <img src="imgs/about3.png">
            <img src="imgs/about3.png">
            <img src="imgs/img1.jfif">
            <img src="imgs/about3.png">
          </div>  
        </div>
      </div>
    </div>

    <div class="services">
      <div class="text-in-bg"><h1>SERVICES</h1></div>
      <h1 class="services-header">WHAT WE <span>OFFER !</span></h1>
      <div class="services-contents">
        <div class="services-card">
          <h3>HR Consulting</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <img src="imgs/service1.png">
          <span>></span>
        </div>
        <div class="services-card">
          <h3>Digital Presence</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <img src="imgs/service2.png">
          <span>></span>
        </div>
        <div class="services-card">
          <h3>IT Support</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <img src="imgs/service3.png">
          <span>></span>
        </div>
        <div class="services-card">
          <h3>Communication</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <img src="imgs/service4.png">
          <span>></span>
        </div>
        <div class="services-card">
          <h3>P2P Recruitment</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <img src="imgs/service5.png">
          <span>></span>
        </div>
        <div class="services-card">
          <h3>Staff & Management</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
          <img src="imgs/service6.png">
          <span>></span>
        </div>

      </div>
    </div>

    <div class="testimonials">
        <div class="text-in-bg"><h1>TESTIMONIALS</h1></div>
        <h1 class="testimonials-header">WHAT OUR <span>CLIENTS </span> SAY !</h1>
        <div class="testimonials-contents">
          <div class="div-1">
            <img class="prev" src="imgs/test1.jfif">
            <img class="next" src="imgs/test2.jfif">
            <img class="active" src="imgs/test3.jfif">
            <div class="testimonial-list" style="background-image: url('imgs/test4.png');"></div>
          </div>
          <div class="div-2">
            <div id="carouselExampleFade" class="carousel slide mb-4" data-bs-ride="carousel" data-bs-pause="false" data-bs-pause="false">
            <div class="carousel-inner">
              <div class="carousel-item active carousel-item-custom">
                <h3>Quick and Easy</h3>
                <p>Jane Faith - HR Manager</p>
                <label>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</label>
              </div>
              <div class="carousel-item carousel-item-custom">
                <h3>Growth and Keen Management</h3>
                <p>Alice - Fashion Designer</p>
                <label>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</label>
              </div>
              <div class="carousel-item carousel-item-slide">
                <h3>Unforgettable Services</h3>
                <p>Ashraf - Data analyst</p>
                <label>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</label>
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
          <p>Happy customers</p>
        </div>
        <div>
          <h5>53K+</h5>
          <p>Active Customers</p>
        </div>
        <div>
          <h5>98.27%</h5>
          <p>Customer Satisfaction Rate</p>
        </div>
        </div>

      </div>

      <div class="contact">
        <div class="text-in-bg"><h1>CONTACT <h1>US</h1></h1></div>
        <h1 class="contact-header">LET'S <span>TALK !</span></h1>
        <div class="contact-contents">
          <div class="contact-form">
            <h3>Message <span>US !</span></h3>
            <form>
              <input type="text" name="" placeholder="Your Name">
              <input type="email" name="" placeholder="Your Email">
              <input type="text" name="" placeholder="Your Location">
              <input type="text" name="" placeholder="Your Name">
              <textarea placeholder="Type a message..."></textarea>
              <button class="send">Send</button>
            </form>
          </div>
          <div class="contact-info">
            <h4><span>We are</span> open for any Suggestion by any mean of <span>communication.</span></h4>
            <div class="contact-item">
              <img src="icons/phone.svg">
              <div>
                <p>(+250)789486046</p>
                <p>(+250)789486046</p>
              </div>
            </div>
            <div class="contact-item">
              <img src="icons/sms.svg">
              <div>
                <p>lkgroupworld@gmail.com</p>
                <p>contact@lkrecruitmentrw.com</p>
              </div>
            </div>
            <div class="contact-item">
              <img src="icons/location.svg">
              <div>
                <p>4th floor La Bonne Addresse House, </p>
                <p>Nyarugenge Kiyovu, Kigali City</p>
              </div>
            </div>
            <div class="contact-item">
              <img src="icons/time.svg">
              <div>
                <p>Opening time</p>
                <p>Mon - Fri (9:00 AM - 17:00 PM)</p>
              </div>
            </div>
            <div class="contact-item">
              <img src="icons/linkedin.svg">
              <img src="icons/x.svg">
              <img src="icons/insta.svg">
            </div>
          </div>
        </div>
        <div class="shadows one"></div>
        <div class="shadows two"></div>
      </div>


      <div class="faqs">
        <div class="text-in-bg"><h1>FAQs</h1></div>
        <h1 class="faqs-header">FREQUENTLY <span>ASKED </span>QUESTION !</h1>
        <div class="faqs-contents">
          <!-- Accordion -->
        <div class="accordion" id="faqAccordion">

            <!-- Section 1: What Are Digital Services We Provide? -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What Are Digital Services We Provide?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Here you can describe the digital services your company provides.
                    </div>
                </div>
            </div>

            <!-- Section 2: How do we work? -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        How do we work?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Explain how your company operates, your processes, and workflow.
                    </div>
                </div>
            </div>

            <!-- Section 3: How do I reset my password? -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        How do I reset my password?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <label>If you’ve forgotten your password, follow these steps:</label>
                        <ol>
                            <li>Click on the "Forgot Password" link on the login page.</li>
                            <li>Enter your email address and follow the instructions in your inbox.</li>
                            <li>Create a new password and log in again.</li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Section 4: Why LK Group for Your Choice -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour" style="">
                        Why LK Group for Your Choice
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Explain why users should choose LK Group, outlining the benefits, trust factors, and unique features that set you apart.
                    </div>
                </div>
            </div>
            <p>Need more Info, check <span>support page !</span></p>
        </div>
        <div class="image-cut">
          <img src="imgs/trial.png" alt="Styled Image">
        </div>
      </div>
      </div>

      <div class="subscribe">
        <div class="subscribe-contents">
          <div class="image-cut">
            <img src="imgs/trial1.png" alt="Styled Image">
          </div>
          <div class="subscribe-form">
            <div><h1>STAY <h1>INFORMED</h1></h1></div>
            <h1>let’s Keep You <span>updated !</span></h1>
            <form>
              <input type="email" placeholder="Type your Email" name="">
              <button>Subscribe</button>
            </form>
          </div>
        </div>
      </div>
  </div>
  <div class="footer">
        <div>
          <img src="imgs/logo1.png" alt="logo">
          <h5>LK GROUP</h5>
        </div>
        <div>
          <h4>Resources</h4>
          <a href="#" class="active">Home</a>
          <a href="#">About</a>
          <a href="#">Services</a>
          <a href="#">Contact</a>
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

// **Sync Testimonials with Bootstrap Carousel**
document.getElementById("carouselExampleFade").addEventListener("slide.bs.carousel", function (event) {
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

</body>
</html> 