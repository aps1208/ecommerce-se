<?php
session_start();
include('connect.php')
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <!-- Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- Glide js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.css">
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="./css/styles.css" />
    <title>ecommerce Website</title>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,hi', // Add any languages you want here
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <style>
      /* Optional: Custom styling for the Google Translate widget */
      #google_translate_element {
          text-align: right;
          margin-top: 10px;
      }
      .goog-logo-link, .goog-te-gadget {
          display: none !important;
      }
      .goog-te-banner-frame.skiptranslate {
          display: none !important;
      }
      body {
          top: 0 !important;
      }
    </style>
  </head>
  <body>
  <div id="google_translate_element"></div>
    <!-- Header -->
    <header class="header" id="header">
      <!-- Top Nav -->
      <div class="top-nav">
        <div class="container d-flex">
          <p>Order Online Or Call Us: 2-55555</p>
          <ul class="d-flex">
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="FAQ.html">FAQ</a></li>
            <li><a href="contactus.html">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="navigation">
        <div class="nav-center container d-flex">
       

          <ul class="nav-list d-flex">
         <!--   <li class="nav-item">
              <a href="login.php" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
              <a href="login.php" class="nav-link">SignUp</a>
              </li>-->
            <li class="nav-item">
              <a href="product.html" class="nav-link">Shop</a>
            </li>
            
            <li class="nav-item">
              <a href="aboutus.html" class="nav-link">About</a>
            </li>
            <li class="nav-item">
              <a href="contactus.html" class="nav-link">Contact</a>
            </li>
            
            
            
            
            
          </ul>

          <div class="icons d-flex">
            <a href="profile.php" class="icon">
              <i class="bx bx-user"></i>
            </a>
          
          </div>

          
        </div>
      </div>

    <div class="hero">
      <div class="glide" id="glide_1">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            <li class="glide__slide">
              <div class="center">
                <div class="left">
                  <span class="">New Inspiration 2024</span>
                  <h1 class="">NEW COLLECTION!</h1>
                  <p>Trending from men's and women's  style collection</p>
                  <a href="product.html" class="hero-btn">SHOP NOW</a>
                </div>
                <div class="right">
                    <img class="img1" src="./images/hero-1.png" alt="">
                </div>
              </div>
            </li>
            <li class="glide__slide">
              <div class="center">
                <div class="left">
                  <span>New Inspiration 2024</span>
                  <h1>THE PERFECT MATCH!</h1>
                  <p>Trending from men's and women's  style collection</p>
                  <a href="#" class="hero-btn">SHOP NOW</a>
                </div>
                <div class="right">
                  <img class="img2" src="./images/hero-2.png" alt="">
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    </header>

    <!-- Categories Section -->
    <section class="section category">
      <div class="cat-center">
        <div class="cat">
          <img src="./images/cat3.jpg" alt="" />
          <div>
            <p>WOMEN'S WEAR</p>
          </div>
        </div>
        <div class="cat">
          <img src="./images/cat2.jpg" alt="" />
          <div>
            <p>ACCESSORIES</p>
          </div>
        </div>
        <div class="cat">
          <img src="./images/cat1.jpg" alt="" />
          <div>
            <p>MEN'S WEAR</p>
          </div>
        </div>
      </div>
    </section>

    

    <!-- Promo -->

    <section class="section banner">
<div class="left">
  <span class="trend">Trend Design</span>
  <h1>New Collection 2024</h1>
  <p>New Arrival <span class="color">Sale 50% OFF</span> Limited Time Offer</p>
  <a href="product.html" class="btn btn-1">Discover Now</a>
</div>
<div class="right">
  <img src="./images/banner.png" alt="">
</div>
    </section>
    <!-- Subscribe Section -->
<section class="section subscribe">
  <div class="container">
    <div class="subscribe-content">
      <h2>Subscribe to our Newsletter</h2>
      <p>Get the latest updates and offers directly to your inbox.</p>
      <form action="#" method="POST" class="subscribe-form">
        <input type="email" name="email" placeholder="Enter your email" required>
        <button type="submit" class="subscribe-btn">Subscribe</button>
      </form>
    </div>
  </div>
</section>





   

   

    <!-- Footer -->
    <footer class="footer">
      <div class="row">
        <div class="col d-flex">
          <h4>INFORMATION</h4>
          <a href="aboutus.html">About us</a>
          <a href="contactus.html">Contact Us</a>
          <a href="terms.html">Term & Conditions</a>
     
        </div>
        <div class="col d-flex">
          <h4>USEFUL LINK</h4>
          <a href="product.html">Online Store</a>
          <a href="contactus.html">Customer Services</a>
          
        
        </div>
        <div class="col d-flex">
          <span><i class='bx bxl-facebook-square'></i></span>
          <span><i class='bx bxl-instagram-alt' ></i></span>
          <span><i class='bx bxl-github' ></i></span>
          <span><i class='bx bxl-twitter' ></i></span>
          <span><i class='bx bxl-pinterest' ></i></span>
        </div>
      </div>
    </footer>


  

  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
  <script src="./js/slider.js"></script>
  <script src="./js/index.js"></script>
</html>
