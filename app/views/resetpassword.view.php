<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?php echo ROOT ?>/assets/css/resetpass.css">
  <title>Reset Password</title>
</head>

<body>
  <section class="container">
    <form action="" class="name-form" method="post" id="myForm">

      <div class="input-wrapper">
        <label for="password">
          <i class="fa-solid fa-lock icon"></i>
        </label>
        <input type="password" name="password" id="password" required placeholder="Enter your password">
        <span class="eye-icon" onclick="togglePasswordVisibility('password')">
          <i class="fa-solid fa-eye hide-btn"></i>
        </span>
      </div>

      <div class="input-wrapper">
        <label for="password">
          <i class="fa-solid fa-lock icon"></i>
        </label>
        <input type="password" name="password" id="repassword" required placeholder="Re-enter your password">
        <span class="eye-icon" onclick="togglePasswordVisibility('repassword')">
          <i class="fa-solid fa-eye hide-btn"></i>
        </span>
      </div>
      <span id="passwordError" style="color: red; display: none;">Passwords do not match!</span>
      <input type="submit" value="Reset Password" name="submit">
    </form>
  </section>
  <script src="<?php echo ROOT ?>/assets/js/signup.js"></script>
</body>

</html>