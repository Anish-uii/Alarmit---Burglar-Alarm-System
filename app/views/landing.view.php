<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AlarmIt! - Welcome</title>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
  <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/landing.css">
  <script>
    AOS.init();
  </script>

</head>

<body>
  <header>
    <section class="navbar container">
      <div class="logo-con">
        <a href="/">
          <img src="<?php echo ROOT ?>/assets/images/warning.png" alt="" class="logo-image">
        </a>
        <a href="/">
          <h2>AlarmIt !</h2>
        </a>
      </div>
      <div class="right">
        <nav>
          <a href="/contact">Contact Us</a>
          <a href="/about">About</a>
          <a href="/login">Login</a>
          <a href="/signup" id="getstarted-btn">Join Us</a>
        </nav>
      </div>
    </section>
  </header>
  <main>
    <section class="background">
      <section class="intro container">
        <div class="content">
          <div class="intro-image">
            <img src="<?php echo ROOT ?>/assets/images/alarm.png" alt="">
          </div>
          <h1>Protect your property, your way</h1>
          <p>Set up a reliable security system effortlessly.</p>
          <a href="/login">EXPLORE MORE</a>
        </div>
      </section>
    </section>
    <section class="services container">
      <h2>Top Features and Services</h2>
      <div class="cards">
        <div class="card">
          <div class="card-image"><img class="card-img" src="<?php echo ROOT ?>/assets/images/feature1.png" alt=""></div>
          <h3>Motion Detection</h3>
          <p>Receive alerts when motion is detected.</p>
        </div>
        <div class="card">
          <div class="card-image"><img class="card-img" src="<?php echo ROOT ?>/assets/images/feature2.png" alt=""></div>
          <h3>High-Quality Cameras</h3>
          <p>Crystal-clear images for enhanced security.</p>
        </div>
        <div class="card">
          <div class="card-image"><img class="card-img" src="<?php echo ROOT ?>/assets/images/feature3.png" alt=""></div>
          <h3>24/7 Monitoring</h3>
          <p>Continuous monitoring for peace of mind.</p>
        </div>
        <div class="card">
          <div class="card-image"><img class="card-img" src="<?php echo ROOT ?>/assets/images/feature4.png" alt=""></div>
          <h3>Instant Alerts</h3>
          <p>Instant notifications sent to your device.</p>
        </div>
      </div>
    </section>
    <section class="testimonials">
      <section class="container">
        <h3>What the say about us ?</h3>
        <div class="test-cards">
          <div class="test-card" data-aos="fade-right">
            <div class="user-header">
              <img src="<?php echo ROOT ?>/assets/images/man.png" alt="John Doe">
              <p class="username">John Doe</p>
            </div>
            <p class="review">"This alarm system is a game-changer! I feel so much safer knowing that I can monitor my home remotely and get instant alerts if there's any suspicious activity."</p>
          </div>

          <div class="test-card" data-aos="fade-left">
            <div class="user-header">
              <img src="<?php echo ROOT ?>/assets/images/woman.png" alt="Emily Smith">
              <p class="username">Emily Smith</p>
            </div>
            <p class="review">"I've been using this alarm website for a few weeks now, and it's been fantastic. The camera integration is seamless, and the motion detection feature works like a charm."</p>
          </div>

          <div class="test-card" data-aos="fade-right">
            <div class="user-header">
              <img src="<?php echo ROOT ?>/assets/images/human.png" alt="David Johnson">
              <p class="username">David Johnson</p>
            </div>
            <p class="review">"I've tried other alarm systems before, but none have been as user-friendly and effective as this one. Setting up the cameras was a breeze, and the app interface is intuitive."</p>
          </div>

          <div class="test-card" data-aos="fade-left">
            <div class="user-header">
              <img src="<?php echo ROOT ?>/assets/images/man(1).png" alt="Sarah Brown">
              <p class="username">Sarah Brown</p>
            </div>
            <p class="review">"I highly recommend this alarm website to anyone looking for peace of mind. Being able to check on my home from anywhere gives me a sense of security that's priceless."</p>
          </div>
        </div>
      </section>
    </section>

  </main>
  <footer class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-logo">
          <a href="/">
            <img src="<?php echo ROOT ?>/assets/images/warning.png" alt="AlarmIt Logo">
          </a>
        </div>
        <div class="footer-links">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="/contact">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-social">
          <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2024 AlarmIt. All rights reserved.</p>
      </div>
    </div>
  </footer>

</body>

</html>