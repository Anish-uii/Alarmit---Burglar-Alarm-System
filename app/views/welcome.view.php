<?php

if ($_SESSION['registered'] !== true) {
  header('Location: /');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/welcome.css">
  <title>Welcome</title>
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
          <a href="http://localhost:8501/">Detect</a>
          <a href="/logout" id="logout-btn">Logout</a>
        </nav>
      </div>
    </section>
  </header>

  <main>
    <section class="intro">
      <section class="container">
        <h1>Welcome to Alarmit.com!</h1>
        <section class="sliders">
          <div class="autoplay">
            <div class="card"><img src="<?php echo ROOT ?>/assets/images/slider1.jpeg" alt="Image 1">
              <p>Enhance your home security with our advanced alarm systems.</p>
            </div>
            <div class="card"><img src="<?php echo ROOT ?>/assets/images/slider2.jpg" alt="Image 2">
              <p>Stay connected and receive instant notifications on your phone.</p>
            </div>
            <div class="card"><img src="<?php echo ROOT ?>/assets/images/slider3.jpg" alt="Image 3">
              <p>Our face detection technology ensures accurate intrusion detection.</p>
            </div>
            <div class="card"><img src="<?php echo ROOT ?>/assets/images/slider4.jpg" alt="Image 4">
              <p>24/7 monitoring for complete peace of mind.</p>
            </div>
            <div class="card"><img src="<?php echo ROOT ?>/assets/images/slider5.jpg" alt="Image 5">
              <p>Customize your security settings to fit your lifestyle.</p>
            </div>
            <div class="card"><img src="<?php echo ROOT ?>/assets/images/slider6.jpg" alt="Image 6">
              <p>Join thousands of satisfied customers who trust us for their security needs.</p>
            </div>
            <div class="card"><img src="<?php echo ROOT ?>/assets/images/slider7.jpg" alt="Image 7">
              <p>Contact us today to get started!</p>
            </div>
          </div>
        </section>
      </section>
    </section>
    <section class="how-it-works">
      <div class="container">
        <h2>How our website works</h2>
        <section class="features">
          <div class="feature">
            <i class="fas fa-mobile-alt"></i>
            <h3>Mobile SMS Sending</h3>
            <p>Utilizing Twilio API, we ensure seamless and secure SMS delivery to your mobile device.</p>
          </div>
          <div class="feature">
            <i class="fas fa-video"></i>
            <h3>Face Detection with OpenCV</h3>
            <p>Our advanced security system employs OpenCV library for precise face detection, enhancing your home security.</p>
          </div>
          <div class="feature">
            <i class="fas fa-lock"></i>
            <h3>24/7 Monitoring</h3>
            <p>Continuous monitoring of your property ensures round-the-clock protection and peace of mind.</p>
          </div>
        </section>
      </div>
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
  <script type="text/javascript">
    $(document).ready(function() {
      $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
      });
    });
  </script>


</body>

</html>