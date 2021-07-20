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

<?php


//var_dump($_GET);
$prymary = $_SESSION["user_name"];
//echo $prymary;
$query="SELECT * FROM user_profile WHERE u_name='{$prymary}'";
$result=mysqli_query($conn,$query);

$i=1;

while($row = mysqli_fetch_array($result))
{

  $c_img = $row['c_image'];
  $u_img = $row['u_image'];
  $u_about = $row['about'];
  $u_email = $row['email'];
  $u_phone = $row['phone'];
  $u_rank = $row['rank'];
  $u_status = $row['status'];
  $u_name = $row['p_name'];
  $u_worth = $row['worth'];
  // echo '<img src="data:image/jpeg;base64,'.base64_encode($row['c_image']).' ">';
}
// echo $u_name;
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Profile</title>
  <meta charset="utf-8">
  <style>
  .in p {
    margin-top: 10px;
    font-size: 15px;
    font-weight: bold;
    color: white;
    line-height: 1em;
  }

  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/alignment.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="position: absolute; top: 0px; height: 100%; width: 100%;">
  <div>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <!--collaps button-->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- -->
          <a class="navbar-brand" href="#">Mobile Company Management</a>
        </div>

  <ul class="nav navbar-nav navbar-right">
    <li><a href="dashboard.php"><span class="glyphicon glyphicon-user"></span> DashBoard</a></li>
    <li><a href="make_phone.php"><span class="glyphicon glyphicon-user"></span> WorkShop</a></li>
    <li><a href="phone_config.php"><span class="glyphicon glyphicon-user"></span> ConfigureShop</a></li>
    <!--<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>-->
    <li><a href="research.php"><span class="glyphicon glyphicon-user"></span> Research</a></li>
    <li><a href="employee_list.php"><span class="glyphicon glyphicon-user"></span> Employee</a></li>
    <li><a href="sales.php"><span class="glyphicon glyphicon-user"></span> Sales</a></li>
    <li><a href="mobile.php"><span class="glyphicon glyphicon-user"></span> Mobiles</a></li>
    <li><a href="home.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
  </ul>
  <!--   -->
</div>
</div>
<div>
  <?php
  echo '<img class="img-responsive" alt="Upload" align="center" data-type="image" src="data:image/jpeg;base64,'.base64_encode($c_img).' " style="width: 100%; height: 400px; object-fit: cover;">';
  ?>
</div>
</nav>
</div>



<div class="row container-fluid">
  <div class="col-sm-3 thumblain">
    <?php
    echo '<img alt="" align="center" data-type="image" class=" card container img-responsive" src="data:image/jpeg;base64,'.base64_encode($u_img).' " style="width: 250px; height:auto ; object-fit: cover; padding: 10px;">';
      ?>
  </div>
  <div class="col-sm-9 thumbnail card container" style="padding:20px; width: 73%; height: 180px;margin-top: 15px;overflow: auto;">
    <?php
    echo '<p style="">'.$u_about."</p>";
    ?>
  </div>
</div>

<div class="row container-fluid">
  <div class="col-sm-3 thumblain" style="background-color:;">

    <h3>Name <?php echo '   : '.$u_name ?></h3>
    <h3>Net Worth <?php echo': '.$u_worth.' $' ?></h3>
    <h3>Email <?php echo '  : '.$u_email ?></h3>
    <h3>Phone <?php echo '  : '.$u_phone ?></h3>
    <h3>Status <?php echo ' : '.$u_status ?></h3>
    <h3>Rank <?php echo '   : '.$u_rank ?></h3>
    <div style="text-align:center; margin-top: 50px;"><a style="text-decoration:none; color: white;" href="make_phone.php" class="btn btn-primary">Make a Phone</a></div>

  </div>
  <div class="col-sm-9" style="padding:20px; height: 500px; overflow: auto; background-color:gray;">
    <header style="text-align: center; color:white; padding:10px; "><h1><b>Employee</b></h1></header>
    <?php
    //echo '<p style="">'.$u_about."xxxxxxxxxxxxxxxx</p>";
    $query="SELECT * FROM employee_info WHERE taken = '{$prymary}';";
    //echo $query;
    $result=mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($result))
    {
      $e_img = $row['e_img'];
      $e_name = $row['e_name'];
      $e_skill = $row['e_skil'];
      $e_level = $row['e_level'];
      $e_taken = $row['taken'];
      $e_id = $row['id'];
      $e_deg = $row['designation'];
      $e_salary = $row['salary'];
      $info = '<div class="in" style="line-height:1em;" style="text-align:center;">
      <p>Name       : '.$e_name.'<br>
      <p>Designation: '.$e_deg.'<br>
      <p>Skill      : '.$e_skill.'<br>
      <p>Level      : '.$e_level.'<br>
      <p>Salary     : '.$e_salary.' $</p><br>
      </div>';
      $print = '<div class="card container" style = " float:left; text-align:center; height:400px;width:250px;background-color:;overflow:;padding:10px;">
      <img alt="image"  data-type="image" class=" myImg img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 150px; height: 200px; object-fit: cover; align:center;">
      '.$info.'</div>' ;

      echo $print;

    }
    ?>
  </div>
</div>

</body>
</html>
