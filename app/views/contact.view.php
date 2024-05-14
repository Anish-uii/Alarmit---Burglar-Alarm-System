<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/contact.css">
    <title>Contact Us</title>
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
                    <a href="/about">About</a>
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
        <div class="container">
            <section class="contact-info">
                <h2>Our Contact Information</h2>
                <div class="info">
                    <div>
                        <div class="icons">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <p class="label">Phone:</p>
                        <p class="value">+849009834</p>
                    </div>
                    <div>
                        <div class="icons">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <p class="label">Email:</p>
                        <p class="value">alarmit.contactus@gmail.com</p>
                    </div>
                    <div>
                        <div class="icons">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <p class="label">Address:</p>
                        <p class="value">Jajput, Rajasthan, India-302024</p>
                    </div>
                </div>

        </div>
        </section>
        <section class="contact-form container">
            <h1>Get In Touch</h1>

            <section class="new">
                <div>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for="number">Your Number</label>
                            <input type="tel" id="number" name="number" placeholder="Your Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email" placeholder="Your Email Address">
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" placeholder="Write your message here..."></textarea>
                        </div>
                        <button type="submit">Send Message</button>
                    </form>
                </div>

                <div class="location">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5258.309125788896!2d75.86705784025725!3d26.82254429396716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db770070b115f%3A0x6f306afd08a3e737!2sSwami%20Keshvanand%20Institute%20of%20Technology%2C%20Management%20%26%20Gramothan%20(SKIT)!5e0!3m2!1sen!2sin!4v1679246909052!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
        </section>


        </div>

    </main>
</body>

</html>