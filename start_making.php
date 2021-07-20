<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "game_data";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if(mysqli_connect_error()){
  die("Database Connection failed : " ."(".  mysqli_connect_error() . ")"
);
}
session_start();
$prymary = $_SESSION["user_name"];
$total = $_GET['price'];
$_SESSION['making_cost'] = $total;
//  echo $total;
?>
<!DOCTYPE html>
<html>
<head>
  <title>WorkShop</title>
  <link type="text/css" rel="stylesheet" href="">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body  style="text-align:center; margin-top:00px; background-color: black;" onload="setTimeout(function(){window.location = 'make_sale.php';},60000)">
  <div>
    <img style="align:center; " src="img_gif/gg/pp.gif" alt="">
  </div>
  <?php

  $query="SELECT * FROM employee_info WHERE taken = '{$prymary}';";
  //echo $query;
  $result=mysqli_query($conn,$query);
  while($row = mysqli_fetch_array($result))
  {

    $e_skill = $row['e_skil'];
    $e_level = $row['e_level'];
    $e_deg = $row['designation'];
    $e_salary = $row['salary'];
    $e_skill +=20;
    $e_level += ($e_skill/100);
    $e_skill %=100;
    $e_id = $row['id'];
    $query2="UPDATE employee_info SET e_skil = ".$e_skill.", e_level = ".$e_level." WHERE taken = '{$prymary}' AND id = ".$e_id.";";
    $result2=mysqli_query($conn,$query2);
    $total +=$e_salary;
  }

$_SESSION['cost'] = $total;

  $query="SELECT worth FROM user_profile WHERE u_name='{$prymary}'";
  $result=mysqli_query($conn,$query);

  $i=1;

  while($row = mysqli_fetch_array($result))
  {
    $u_worth = $row['worth'];
  }

  if($u_worth > $total +1000){
    $query="UPDATE phones_component SET done = 1, model = 'MCM' WHERE c_name = '{$prymary}' AND done = 0;";
    $result=mysqli_query($conn,$query);
    $u_worth -=$total;
  }
  else {
     $px = 'You Dont Have enough Money';
     echo $px;
  }


  $query="UPDATE user_profile SET worth = ".$u_worth." WHERE u_name = '{$prymary}';";
  $result=mysqli_query($conn,$query);

  ?>


</body>
</html>
