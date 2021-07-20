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
$model = $_GET["model"];
$table = $_GET["table"];
$price = $_GET["pr"];
//echo $price;
$primary = $_SESSION["user_name"];
//echo $primary;

$query="SELECT c_name,total_cost,done  FROM phones_component WHERE c_name = '".$primary."'";
$result=mysqli_query($conn,$query);
$fl = 0;
$pos = "NO";
//$x= "'".$table."'";
$total_cost = 0;
$pera =0;
while($row = mysqli_fetch_array($result))
{
  //echo "ami loop e duksi<br>";
  $pera = 1;
  $c_name = $row['c_name'];
  $done = $row['done'];

  if($done == 0)
  {
    //  $pos = $row[$x];
    $fl = 1;
    break;
  }
}

if($pera == 0)
{

  $check = 'INSERT INTO phones_component (c_name,total_cost) VALUES';
  $check .="('".$primary."',0)";
  $result_0 = mysqli_query($conn, $check);

}

$total_cost +=$price;
$check = 'UPDATE phones_component SET '.$table.' = '."'".$price."' WHERE c_name ='{$primary}'  AND done = 0";
//  echo $check;
$result_0 = mysqli_query($conn, $check);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Purchasing</title>
</head>
<body  style="text-align:center; margin-top:00px; background-color: rgb(0,154,166);" onload="setTimeout(function(){window.location = 'phone_config.php';},3000)">
  <div>
    <img style="align:center;" src="img_gif/brands.gif" alt="">
  </div>

</body>
</html>
