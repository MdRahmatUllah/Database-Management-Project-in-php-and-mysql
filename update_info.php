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
$prymary = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Update Information</title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body style="background: url(img/bk.jpg)">

  <div class="container">
    <form action="#" method="POST" class="form" enctype="multipart/form-data" autocomplete="off">
    <div class="avatar">
      <img src="https://res.cloudinary.com/merobusts/image/upload/v1518264117/head-659651_640.png" alt="avatar">
    </div>
    <div class="form-item">
      <label for="image1">Company Image</label>
      <!-- <input type="text" name="email" class="is-input" placeholder="Image" id="email" autocomplete="off" required>-->
      <input type="file" name="img1" class="is-input" placeholder="Image11" id="img1" autocomplete="off"/>
    </div>
    <div class="form-item">
      <label for="image2">Profile Image</label>
      <!-- <input type="password" name="password" class="is-input" placeholder="Password" id="password" required>-->
      <input type="file" name="img2" class="is-input" placeholder="Image22" id="img2" autocomplete="off" />
    </div>
    <div class="form-item">
      <label for="info">About</label>
      <textarea id="ab" name="about" placeholder="Write something About yourself.." style="height:200px"></textarea>
    <!--  <input type="text" name="about" class="form-control" placeholder="" id="ab" autocomplete="off">-->
      <!--<textarea rows="4" cols="50" name="about" form="usrform">Enter text here...</textarea>-->
    </div>
    <div class="form-item">
      <button type="submit" name="submit" class="button is-button">Update</button>
      <!-- <input type="submit" name="submit"/>-->
    </div>
    <div class="form-item">
      <button class="button is-button"><a href="login.php">You are Done Go to LogIn</a></button>
    </div>

</form>

  </div>

  <?php
  //echo "hello";

if(isset($_POST["submit"])){
  //unset($_POST["submit"]);
  //echo 'xxxxx2';
  $user_about = $_POST['about'];
  $filename = addslashes($_FILES['img1']['name']);
  $filename2 = addslashes($_FILES['img2']['name']);
  $tmpname = addslashes(file_get_contents($_FILES['img1']['tmp_name']));
  $tmpname2 = addslashes(file_get_contents($_FILES['img2']['tmp_name']));
  $filetype = addslashes($_FILES['img1']['type']);
  $filetype2 = addslashes($_FILES['img2']['type']);
  $filesize = addslashes($_FILES['img1']['size']);
  $filesize2 = addslashes($_FILES['img2']['size']);
  $array = array('jpg','jpeg');
  //$ext = pathinfo($filename, PATHINFO_EXTENSION);
  if(!empty($filename)&&!empty($filename2)){
      // if(in_array($ext, $array)){
      //mysql_query("Insert into upl(name,image) values('$filename','$tmpname')");
      mysqli_query($conn,"UPDATE user_profile SET c_image = '$tmpname' , u_image = '$tmpname2' , about = '$user_about' WHERE u_name ='$prymary'");
      //echo $cunt;
      //mysqli_query($conn,"UPDATE user_profile SET u_image = '$tmpname2' WHERE u_name ='bijoy'");
      //echo $cunt;
      //UPDATE user_profile SET c_image = '$tmpname' WHERE u_name ='$prymary';
      echo "uploaded";

      // }
      // else{
      //   echo "failed";
      // }
    }
    else {
      echo "Not success please try again</br>";
    }
  }


  ?>
</body>
</html>
