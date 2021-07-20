<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "game_data";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
session_start();
if(mysqli_connect_error()){
     die("Database Connection failed : " ."(".  mysqli_connect_error() . ")"
          );
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>matching_login</title>
      <link rel="stylesheet" type="text/css" href="css/login.css">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body style="background: url(img/bk.jpg)">

<!--<pre>
      <?php
    // print_r($_POST);

      ?>
</pre> -->



<?php

$fr_name = $_POST['email'];
$fr_pass = $_POST['password'];

//
$ch = "SELECT username FROM login_info WHERE (username='{$fr_name}' OR email='{$fr_name}' OR phone='{$fr_name}') AND pass='{$fr_pass}';";
//



$result_0 = mysqli_query($conn, $ch);

//print_r($result_0);




if($xxx = mysqli_fetch_row($result_0))
{
      //var_dump($xxx);
     // print_r($xxx);
      $f_name = $xxx[0];
      $_SESSION["user_name"] = $f_name;
     // echo $f_name;
      //die("This user is exists");
      $link = '<div class="container">';
      $link .= '<form action="profile.php?id=';
      $link .= $f_name.'"';
      $link .=' method="POST" class="form" autocomplete="off">
              <div class= "form-item">
                <h4>You Successfully Loged in</h4>
          </div>
          <div class="form-item">
                <button type="submit" class="button is-button">START</button>
          </div>
    </form>
</div>';
echo $link;
     /* die('<div class="container">
            <form action="profile.php?{$f_name}" method="POST" class="form" autocomplete="off">
              <div class= "form-item">
                <h4>You Successfully Loged in</h4>
          </div>
          <div class="form-item">
                <button type="submit" class="button is-button">START</button>
          </div>
    </form>
</div>');*/
}
else
{
      die('<div class="container">
           <form action="login.php" method="POST" class="form" autocomplete="off">
              <div class= "form-item">
                <h4>Try again</h4>
          </div>
          <div class="form-item">
                <button type="submit" class="button is-button">Try</button>
          </div>
    </form>
</div>');
}

?>

</body>
</html>
