<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>Lk GROUP Blogs</title>
  <style>
        /* Default fixed-width layout for larger screens */
    .page {
        margin: auto;
        max-width: 1660px;
        overflow-x: hidden;
        margin-top: 110px;
    }

    @font-face {
    font-family: 'Phudu';
    src: url('fonts/Phudu-Regular.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}

@font-face {
    font-family: 'Phudu-big';
    src: url('fonts/Phudu-Bold.ttf') format('truetype');
    font-weight: bold;
    font-style: normal;
}
@font-face {
    font-family: 'Monoton';
    src: url('fonts/Monoton-Regular.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
  }
body{
    padding: 0;
    margin: 0;
    font-family: "poppins",sans-serif;
    text-align: left;
}

span,a,label,p{
    font-family: "poppins",sans-serif;
    text-decoration: none;
}

h1 span,h2 span,h3 span,h4 span,h6 span,h6 span{
    font-family: "Phudu-big";
     font-size: bold;
}

h1,h2,h3,h4,h6,h6{
    font-family: "Phudu-big";
     font-size: bold;
}
button,input{
    font-family: "poppins",sans-serif;
}

.navigation-container{
    background: white;
    z-index: 10000;
    height: 110px;
    border-bottom: 2px solid #343973;
    width: 100%;
    top: 0;
    left: 0;
    right: 0;
    background: white;
    backdrop-filter: blur(20px);
    z-index: 10000000000000;
    position: fixed;
    justify-content: center;
    align-content: center;
    justify-items: center;
    padding: 15px;
}
.real-header{
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: auto;
    max-width: 1660px;
    position: relative;
}
.navigation-container a{
    font-size: .9em;
}
.logo{
    width: 200px;
}

.header-navigation{
    padding: 20px 15px;
    border-radius: 50px;
    background: #F4F8FF;
}

.header-navigation a{
    color: black;
    padding: 10px 23px;
    border: none;
    border-radius: 30px; 
    margin-left: 3px;
    transition: all .5s;
}
.header-navigation a.active{
    background: #343973;
    color: white;
}
.header-navigation a:hover{
    background: #343973;
    color: white;
}
.header-links{
    position: relative;
    display: inline-block;
    margin-right: 70px;
}
.lang-btn {
    position: absolute;
    color: black;
    right: 10px;
    font-size: .7em;
    border: 1px solid black;
    background-color: transparent;
    gap: 5px;
    padding: 1px 5px;
    outline: none;
  }
  .lang-btn img{
    width: 30px;
  }

  
.header-search{
    color: #343973;
    height: 16px;
    width: 16px;
    align-items: center;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    right: 10px;
}

.search-bar{
    display: none;
    padding: 7px 30px 7px 20px;
    width: 100px;
    font-size: .7em;
    color: black;
    outline: none;
    border: none;
    border: .1em solid #343973;
    border-radius: 20px;
    background-color: transparent;
    transition: width 1s ease-in-out;
}
.search-bar.active {
    display: inline-block; /* Show the search bar when active */
    width: 200px;
}
.header-links a{
    color: #343973;
}
.header-links a:first-of-type{
    border-right: 3px solid #343973;
}
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
    }

    .blogs-body {
      padding: 40px;
      max-width: 100%;
      margin: auto;
    }

    .blogs-body img {
      float: right;
      width: 50%;
      max-width: 50%;
      margin-left: 30px;
      margin-bottom: 20px;
      shape-outside: margin-box;
    }

    .blog-texts h2 {
      margin-top: 0;
    }

    .blog-texts::after {
      content: "";
      display: table;
      clear: both;
    }

    .blog-texts p {
      margin-bottom: 1em;
    }


    


.footer{
    background-color: #E1E5F1;
    padding: 20px 40px 0 40px;
    display: grid;
    width: 100%;
    grid-template-columns: repeat(6, 1fr);
    text-align: left;
}
.footer div:first-child{
    justify-content: center;
    justify-items: center;
    align-content: center;
    align-items: center;
    text-align: center;
}

.footer div:first-child img{
    width: 100px;
    margin: auto;
}
.footer div:first-of-type h5{
    text-align: center;
    color: #343973;
    font-family: "phudu-big";
    margin-top: 15px;
}
.footer div{
    display: flex;
    flex-direction: column;
    gap: 10px;
    margin-bottom: 40px;
}
.footer div h4{
    font-size: 1em;
    color: black;
    font-family: "phudu-big";
}
.footer div a{
    font-size: .9em;
    opacity: 1;
    color: black;
    font-family: "poppins";
    transition: all .3s ease;
}
.footer div a:hover{
    transform: scale(1.02);
}
.footer div a.active{
    color: #343973;
    position: relative;
}
.footer div a.active:after{
    content: "";
    position: absolute;
    width: 10%;
    height: 2px;
    background-color: #343973;
    bottom: -5px;
    left: 0;
}

.footer .footer-social{
    display: block;
    margin-bottom: 0;
}

.footer .footer-social img{
    width: 30px;
    margin-right: 10px;
}












/*responsiveness*/

.hamburger{
    display: none;
}
.offcanvas{
    background-color: #F4F8FF;
    color: black;
    max-width: 300px;
    z-index: 100000000000000000000000;
    position: fixed;
    top: 0; 
    right: 0; 
    height: 100vh; 
    width: 250px; 
    z-index: 10; 
    transform: translateX(-100%); 
    transition: transform 0.3s ease; 
    backdrop-filter: blur(20px);
}
.offcanvas-body ul{
    list-style-type: none;
    width: 100%;
    padding-left: 0;
}
.offcanvas-body ul{
    overflow: hidden;
}
.offcanvas-body ul li{
    font-size: 1.3em;
    padding: 10px;
    margin-bottom: 5px;
    color: black;
    transition: all .3s;
    transform: translateX(10px);
}
.offcanvas-body ul li:hover{
    background-color: rgba(0, 0, 0, 1);
}
.offcanvas-body ul li svg{
    margin-right: 10px;
    color: #343973;
}


@media (max-width: 1024px) {
    .blogs-body {
      padding: 20px;
    }
    .logo{
        width: 150px;
    }
    .header-navigation{
        display: none;
    }
    .hamburger{
        display: block;
    }
    .header-links{
        position: absolute;
        right: 35px;
    }
    .lang-btn {
        right: 50px;
        margin-top: 2px;
    }

    .footer{
        grid-template-columns: repeat(5, 1fr);
    }
    .footer div:first-child{
        justify-content: start;
        justify-items: start;
        align-content: start;
        align-items: start;
        text-align: left;
    }
    
    .footer div:first-child img{
        width: 100px;
        margin: 0;
    }
    .footer div:first-of-type h5{
        margin-top: 10px;
        margin-left: 5px;
    }
}


@media (max-width: 768px) {
    .footer{
        grid-template-columns: repeat(4, 1fr);
    }
    .blogs-body img {
      width: 100%;
      max-width: 100%;
      margin-left: 0px;
    }
    .blog-texts h2 {
      margin-top: 0;
      font-size: 1.3em;
    }

    .blog-texts::after {
      content: "";
      display: table;
      clear: both;
    }

    .blog-texts p {
      margin-bottom: 1em;
      font-size: .9em;
    }
    .blogs-body {
      padding: 10px;
    }
}


@media (max-width: 680px) {
    .footer{
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 520px) {
    .footer{
        grid-template-columns: repeat(2, 1fr);
    }
}
@media(max-width: 510px){
    .search-bar{
        display: none;
        position: absolute;
        bottom: 0;
        border-radius: 0px;
        border-left: none;
        border-right: none;
        border-top: none;
        padding: 10px 20px;
        transform: translateY(180%);
        background: #111111;
        backdrop-filter: blur(20px);
        font-size: .8em;
    }
    
    .search-bar.active {
        display: inline-block; /* Show the search bar when active */
        left: -10px;
        right: 10px;
        width: 105%;
    }
    .header-links{
        position: unset;
    }
    .header-search{
        top: 42%;
        right: 70px;
        transform: translateY(-50%);
    }
    .header-search{
        top: 50%;
        right: 110px;
        transform: translateY(-50%);
    }
    .navigation-container{
        padding: 6px;
    }
    .logo{
        width: 120px;
    }
}
@media (max-width: 480px) {
    .footer div h4{
        font-size: .9em;
        color: black;
        font-family: "phudu-big";
    }
    .footer div a{
        font-size: .8em;
        opacity: 1;
        color: black;
        font-family: "poppins";
        transition: all .3s ease;
    }
    
}

@media (max-width: 425px) {
    .footer{
        padding: 10px 20px;
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
  <div class="blogs-body">
    <img src="imgs/blogs1.png" alt="Blog image">
    <div class="blog-texts">
      <h2>Web Design Trends in 2025: What Your Business Needs to Know</h2>
      <p>As we approach 2025, the world of web design is evolving rapidly. Here are key trends
      that can position your business for success:</p>

      <p><strong>1. Responsive Design.</strong> With over 53% of global web traffic coming from mobile devices, responsive design hasbecome critical. A website must look and function well on all screen sizes. Businessescan achieve this by using responsive frameworks like Bootstrap or by leveraging CSSmedia queries.</p>

      <p><strong>2. Minimalism.</strong>
Simplicity enhances user experience. Websites featuring fewer elements and avoiding
clutter not only look modern but also load faster. Aim for a clean layout with strategic
white space that guides the user&#39;s focus.</p>

      <p><strong>3. Dark Mode.</strong>
Dark mode isn&#39;t just trendy; it reduces eye strain and saves battery life on mobile
devices. Implementing a dark mode option can enhance user satisfaction. Be sure to
include toggle options that allow users to choose their preference.</p>

      <p><strong>4. Interactive Elements.</strong>
Incorporating interactive elements such as quizzes, polls, or 3D animations can engage
visitors longer. A study shows that interactive content can generate twice as many
conversions compared to static content.</p>

      <p><strong>5. Accessibility.</strong>
Ensuring that your website is accessible to people with disabilities is not only a legal
requirement in many regions but also expands your audience. Utilize tools and audits
(like WAVE or Google Lighthouse) to assess and improve accessibility.</p>

      <p style="font-weight:bold;font-style:italic;">Staying ahead of web design trends is essential for attracting and retaining
customers. If you’re looking to modernize your website, contact us at LK Group
World for a consultation!</p>
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
</body>
</html>
