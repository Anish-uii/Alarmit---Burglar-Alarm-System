<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/styles.css">
    <title>Forgot Password</title>
</head>

<body>
    <section class="center-container">
        <section class="container">
            <form class='name-form' action="" method="post">
                <h1 id="page-heading">Forgot Password</h1>
                <p class="innerheading">Enter Username or Email:</p>

                <div class="input-wrapper">
                    <label for="email"><i class="fa-solid fa-envelope"></i></label>
                    <input type="text" name="email" id="email" placeholder="abc1 or abc@example.com">
                </div>

                <input type="submit" value="Reset Password" name="submit">
            </form>
        </section>

        <section class="image-container">
            <img src="<?php echo ROOT ?>/assets/images/alarm-login.jpg" alt="">
        </section>
    </section>
</body>

</html>
