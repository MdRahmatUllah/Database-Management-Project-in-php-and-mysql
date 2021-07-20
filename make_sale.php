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
$total = $_SESSION["cost"];
$making_cost = $_SESSION['making_cost'];
//  echo $total;
?>
<?php
$los = rand(1,30);
$profit = 0;
if($los%2==1 && $los<10)
{
  $profit = $total;
}
else if($los%2==0 && $los<=10)
{
  $profit = ($total- ($total*(($los*5.0)/100.0))) ;
}
else
{
  $profit = ($total + ($total*(($los*10.0)/100.0))) ;
}
$los = rand(1,3000);
if($los%7==0 ||$los%13==0 ||$los%17==0 ||$los%12==0||$los%57==0 ||$los%11==0)
{
  $profit = ($total + ($total*(($los*10.0)/100.0))) ;
}
$copy = $profit/($making_cost*($making_cost*0.30));


$query="SELECT worth FROM user_profile WHERE u_name='{$prymary}'";
$result=mysqli_query($conn,$query);
while($row = mysqli_fetch_array($result))
{
  $u_worth = $row['worth'];
}

$up = $profit+$u_worth;
$query="UPDATE user_profile SET worth = ".$up." WHERE u_name = '{$prymary}';";
$result=mysqli_query($conn,$query);
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
<body  style="background:url(img_gif/gg/digital-money.gif);  text-align:center; margin-top:00px; background-color: black;" onload="setTimeout(function(){window.location = 'profile.php';},30000)">
  <div style="">
    <!--<img style="align:center; " src="img_gif/gg/digital-money.gif" alt="">-->
    <?php
    $px = '<h2 style= "color:white;">Ptofit Or Lose : '.$profit.'<br>Total Sales : '.$copy.' %</h2>';
    echo $px;
    ?>
  </div>
</body>
</html>
