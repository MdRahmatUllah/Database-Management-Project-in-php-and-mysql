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
$id = $_GET["id"];
if($_SESSION["user_name"]){
$primary = $_SESSION["user_name"];
}
else
{
  $primary = "";
}
	//$query='UPDATE employee_info SET taken = '.$primary.'WHERE id = '.$id;
	//$result=mysqli_query($conn,$query);

//$ch = "UPDATE employee_info SET (taken='{$primary}' WHERE (id='{$id}';";


		$ch	= 'UPDATE employee_info';
		$ch .= " SET taken = '".$primary."'";
		$ch .= " WHERE id= ".$id." ;";
		//echo $ch.'<br>';
		$result_0 = mysqli_query($conn, $ch);
//
//echo $primary;
//echo '<br>'.$id;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Hairing</title>
</head>
<body  style="text-align:center; margin-top:200px; background-color: rgb(26,26,26);" onload="setTimeout(function(){window.location = 'employee_list.php';},300)">
<div>
<img style="align:center;" src="img_gif/loading (1).gif" alt="">
</div>

</body>
</html>
