<?php
session_start();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Form</title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body style="background: url(img/bk.jpg)">

  <div class="container">
   <form action="match_login.php" method="POST" class="form" autocomplete="off">
    <div class="avatar">
      <img src="https://res.cloudinary.com/merobusts/image/upload/v1518264117/head-659651_640.png" alt="avatar">
    </div>
    <div class="form-item">
      <label for="email">Email or Username</label>
      <input type="text" name="email" class="is-input" placeholder="Email or Username" id="email" autocomplete="off" required>
    </div>
    <div class="form-item">
      <label for="password">Password</label>
      <input type="password" name="password" class="is-input" placeholder="Password" id="password" required>
    </div>
    <div class="form-item">
      <button type="submit" class="button is-button">Sign in</button>
    </div>
    <div class="form-item">
     <a href="register.php" class="button is-link">Forgot Password?</a>
   </div>
 </form>
</div>

</body>
</html>
