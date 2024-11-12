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

    <!-- Google Translate Script -->
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
      /* Custom styling for the Google Translate widget */
      #google_translate_element {
          text-align: right;
          margin-top: 10px;
          background-color: #f3f3f3;
          padding: 5px;
          border: 1px solid #ddd;
          width: 150px;
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
  <div id="google_translate_element"></div> <!-- Language Selector -->

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
            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">SignUp</a></li>
            <li class="nav-item"><a href="product.html" class="nav-link">Shop</a></li>
            <li class="nav-item"><a href="aboutus.html" class="nav-link">About</a></li>
            <li class="nav-item"><a href="contactus.html" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </header>

    <!-- Other content sections (e.g., Categories Section, Promo Section, etc.) -->

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
          <span><i class='bx bxl-instagram-alt'></i></span>
          <span><i class='bx bxl-github'></i></span>
          <span><i class='bx bxl-twitter'></i></span>
          <span><i class='bx bxl-pinterest'></i></span>
        </div>
      </div>
    </footer>
  </body>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js"></script>
  <script src="./js/slider.js"></script>
  <script src="./js/index.js"></script>
</html>
