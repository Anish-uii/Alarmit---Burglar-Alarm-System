<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us | AlarmIt</title>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" />
  <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/about.css">
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
          <a href="/">Home</a>
          <a href="/contact">Contact Us</a>
          <?php if (isset($_SESSION['registered']) && $_SESSION["registered"]) {
            echo "<a id='logout-btn' href='/logout'>Logout</a>";
          } else {
            echo "<a href='/login'>Login</a>";
          } ?>
        </nav>
      </div>
    </section>
  </header>
  <main>


    <section class="vision" data-aos="fade-up">
      <div class="container">
        <h2>Our Vision</h2>
        <p>Our vision at AlarmIt is to create a safer and more secure world by empowering individuals and businesses with innovative home security solutions. We strive to provide cutting-edge technology that not only detects and deters intrusions but also fosters peace of mind and confidence in the safety of one's home or business premises. By leveraging the latest advancements in surveillance, automation, and artificial intelligence, we aim to revolutionize the way people protect their properties, making security accessible, intuitive, and reliable for everyone.</p>
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
            <li><a href="/">Home</a></li>
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