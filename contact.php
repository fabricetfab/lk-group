<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="contact.css">
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
    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
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
      <a href="about.php" id="aboutLink">About Us</a>
      <a href="#contact" id="contactLink" class="active">Contact Us</a>
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

  <div class="contacts-container">
    <div class="contacts-hero">
      <img src="imgs/contacts-bg.jfif" class="img-fluid">
      <div class="hero-contents">
        <h1 id="ContactTitle">CONTACT <span>US</span></h1>
        <p class="w-75 text-center" id="ContactText">“We understand that success in the digital world requires a holistic approach so Lk group is a Multifaceted Approach to Business Growth”</p>
      </div>
    </div>
  </div>


  <div class="contacts-contents" id="help">
    <img src="imgs/m.png" class="img-fluid contacts-contents-bg">
    <div class="container-xlg one text-center px-2">
      <h1 class="pt-4 h3" style="color: #343973;" id="FromYOu">We’d Love to Hear from You!</h1>
      <p class="text-black mt-5 m-auto" style="max-width: 768px;opacity: .7;" id="WeAreHere">we're here to help! Our team at LK GROUP is just a message away. Fill out the form below, and let's connect to make your vision a reality.</p>
      <p class="text-black mt-5 m-auto" id="NextStep">Your next step toward growth starts here—let's chat!</p>
      <div class="container-sm border-bottom mt-4 border-dark"></div>
    </div>

     <div class="contact">
        <div class="contact-contents">
          <div class="icons">
            <button class="d-block"><img src="icons/linkedin.svg" class="d-block"></button>
            <button class="d-block"><img style="height: 20px;" src="icons/new_face.svg" class="d-block"></button>
            <button class="d-block"><img src="icons/new_insta.svg" class="d-block"></button>
            <button class="d-block"><img src="icons/x.svg" class="d-block"></button>
          </div>
          <div class="contact-info">
            <h4 id="WeAreOpen"><span>We are</span> open for any Suggestion by any mean of <span>communication.</span></h4>
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
            <!-- <div class="contact-item">
              <button>See location on map<svg class="ms-3" stroke-width="1.8" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M14 13.5a.5.5 0 0 1-.5.5h-6a.5.5 0 0 1 0-1h4.793L2.146 2.854a.5.5 0 1 1 .708-.708L13 12.293V7.5a.5.5 0 0 1 1 0z"/>
              </svg></button>
            </div> -->
          </div>
          <div class="contact-form">
            <h3 id="ContactHead2">Message <span>US !</span></h3>
            <form id="contactForm" method="POST">
              <div>
               <label class="mb-2 mt-2" id="name">Name</label><br> 
               <input type="text" name="name" placeholder="Name" required>
              </div>
              <div>
               <label class="mb-2 mt-2" id="email">Email</label><br>  
               <input type="email" name="email" placeholder="Email" required>
              </div>
              <div>
               <label class="mb-2 mt-2" id="subject">Location</label><br>
               <input type="text" name="subject" placeholder="Subject" required>
              </div>
              <div>
               <label class="mb-2 mt-2">Service</label><br>
               <input type="text" name="service" placeholder="Service" required>
              </div>
              <div class="fortextarea">
               <label class="mb-2 mt-2">Message</label><br> 
               <textarea name="message" placeholder="Type a message..." required></textarea>
              </div>
              <button class="send" id="SendButton">Send</button>
            </form>

               <!-- This is where the response message will appear -->
              <div id="formResponse" style="margin-top: 15px;"></div>
           </div>

        </div>
      </div>


      <!-- <div class="location container-xlg">
        <h1 class="h3 my-5">Location on map</h1>
        <div class="location-contents">
          <div class="">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.1977959265896!2d29.76334837477935!3d-2.0767247979046672!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dccb7ba8a0bb35%3A0xafb19a1cde25a1a7!2sNyamabuye%20Sector!5e0!3m2!1sen!2srw!4v1741855129922!5m2!1sen!2srw" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
          </div>
          <div class="">
            <h2 class="h5 d-block"><span class="text-light">See Place</span> photos</h2>
            <img src="imgs/location1.png" class="img-fluid w-100 d-block">
            <img src="imgs/location2.png" class="img-fluid w-100 d-block">
            <img src="imgs/location3.png" class="img-fluid w-100 d-block">
          </div>
        </div>
      </div>


      <div class="location-text row">
        <div class="col">
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
        </div>
        <div class="col">
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
        </div>
      </div>

      <div class="partners pb-5">
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

  <div class="footer">
        <div>
          <img src="imgs/logo1.png" alt="logo">
          <h5 id="footerH4">LK GROUP</h5>
        </div>
        <div>
          <h4 id="footerMenu1">Resources</h4>
          <a href="home.php#about" id="footerMenuLink1">Home</a>
          <a href="services.php" id="footerMenuLink2">Services</a>
          <a href="about.php" id="footerMenuLink3">About</a>
          <a href="#help" id="footerMenuLink4" class="active">Contact Us</a>
        </div>
        <div>
          <h4 id="footerMenu2">Support</h4>
          <a href="home.php#faq-sec" id="footerMenuLink5">FAQs</a>
          <a href="#help" id="footerMenuLink6">Help</a>
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
<script src="js/ContactLanguageToggle.js"></script> 
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
<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault();

  const form = e.target;
  const formData = new FormData(form);
  const sendButton = document.getElementById('SendButton');
  const messageDiv = document.getElementById('formResponse');

  // Save original button content and show spinner
  const originalButtonText = sendButton.innerHTML;
  sendButton.disabled = true;
  sendButton.innerHTML = `<span class="spinner" style="display:inline-block; width: 18px; height: 18px; border: 2px solid #59e3ff; border-top: 2px solid transparent; border-radius: 50%; animation: spin 0.8s linear infinite;"></span>`;

  fetch('send_email.php', {
    method: 'POST',
    body: formData
  })
  .then(res => res.json())
  .then(data => {
    let alertType = data.status === 'success' ? 'success' : 'danger';
    messageDiv.innerHTML = `
      <div class="alert alert-${alertType} alert-dismissible fade show" role="alert">
        ${data.message}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    `;
    if (data.status === 'success') {
      form.reset();
    }

    // Auto-hide after 5 seconds
    setTimeout(() => {
      const alertEl = messageDiv.querySelector('.alert');
      if (alertEl) {
        bootstrap.Alert.getOrCreateInstance(alertEl).close();
      }
    }, 5000);
  })
  .catch(err => {
    messageDiv.innerHTML = `
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Something went wrong. Please try again later.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    `;
    setTimeout(() => {
      const alertEl = messageDiv.querySelector('.alert');
      if (alertEl) {
        bootstrap.Alert.getOrCreateInstance(alertEl).close();
      }
    }, 5000);
    console.error(err);
  })
  .finally(() => {
    sendButton.innerHTML = originalButtonText;
    sendButton.disabled = false;
  });
});
</script>


</body>
</html>