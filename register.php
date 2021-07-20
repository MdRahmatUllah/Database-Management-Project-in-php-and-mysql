<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "game_data";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_error()){
  die("Database Connection failed : " ."(".  mysqli_connect_error() . ")"
    );
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register Form</title>
</head>
<body style="background: url(img/bk.jpg)">
  <div class="container">
    <form action="insert_reg.php" method="POST" class="form" autocomplete="off">
      <div class="avatar">
        <img src="https://res.cloudinary.com/merobusts/image/upload/v1518264117/head-659651_640.png" alt="avatar">
      </div>
      <div class="form-item">
        <label for="email">Full Name</label>
        <input type="text" name="f_name" class="is-input" placeholder="Full Name" id="email" autocomplete="off" required>
      </div>
      <div class="form-item">
        <label for="email">Email</label>
        <input type="email" name="email" class="is-input" placeholder="Email" id="email" autocomplete="off" required>
      </div>
      <div class="form-item">
        <label for="password">Password</label>
        <input type="password" name="password" class="is-input" placeholder="Password" id="password"required>
      </div>
      <div class="form-item">
        <label for="email">Username</label>
        <input type="text" name="u_name" class="is-input" placeholder="Choose a Username" id="email" autocomplete="off" required>
      </div>
      <div class="form-item">
        <label for="email">Phone</label>
        <input type="text" name="p_number" class="is-input" placeholder="Phone" id="email" autocomplete="off" required>
      </div>
      <div class="form-item">
        <button type="submit" class="button is-button">Sign Up</button>
      </div>
    </form>
  </div>
</body>
</html>
