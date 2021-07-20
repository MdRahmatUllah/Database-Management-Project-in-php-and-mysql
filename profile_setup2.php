<?php
session_start();
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "game_data";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(mysqli_connect_error())
{
	die("Database Connection failed : " ."(".  mysqli_connect_error() . ")");
}

$prymary = $_GET['id'];
$cunt=2;
//echo $prymary;
//unset($_FILES);
//unset($_POST);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile SetUp</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/alignment.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body style="background: url(img/bk.jpg)" class="container-fluid">

	<?php
	$frm1='<div class="container" >
	<form action="#" method="POST" enctype="multipart/form-data" class="form" autocomplete="off">
		<div class= "form-item">
			<input type="file" name="img"/>
		</div>
		<div class="form-item">
			<input type="submit" name="submit"/>
		</div>
	</form>
</div>';
$frm2='<div class="container" >
<form action="#';
$frm2 .='" method="POST" enctype="multipart/form-data" class="form" autocomplete="off">
<div class= "form-item">
	<input type="file" name="img"/>
</div>
<div class="form-item">
	<input type="submit" name="submit"/>
</div>
</form>
</div>';
?>

<?php
echo '<h4 class="text-center" style="padding:20px;font-size: 50px;font-weight: bold;">Upload Profile Image</h4>';

echo $frm1;

if(isset($_POST["submit"])){
	//echo 'xxxxx5';
	$filename1 = addslashes($_FILES['img']['name']);
	$tmpname1 = addslashes(file_get_contents($_FILES['img']['tmp_name']));
	$filetype1 = addslashes($_FILES['img']['type']);
	$filesize1 = addslashes($_FILES['img']['size']);
	$array1 = array('jpg','jpeg');
	$ext1 = pathinfo($filename1, PATHINFO_EXTENSION);
	if(!empty($filename1)){

		if(in_array($ext1, $array1)){
					//mysql_query("Insert into upl(name,image) values('$filename','$tmpname')");
			//mysqli_query($conn,"UPDATE user_profile SET c_image = '$tmpname' WHERE u_name ='$prymary'");
							//echo $cunt;
			mysqli_query($conn,"UPDATE user_profile SET u_image = '$tmpname1' WHERE u_name ='$prymary'");
							//echo $cunt;
					//UPDATE user_profile SET c_image = '$tmpname' WHERE u_name ='$prymary';
			echo "uploaded";
		}
		else{
			echo "failed";
		}
	}
}
//echo $prymary;
$frm0='<div class="fr" >
<form class="fr" action="profile.php?id=';
$frm0 .=$prymary.'" method="POST"class="form" autocomplete="off">
<div class="">
	<input type="submit" name="submit"/>
</div>
</form>
</div>';
echo $frm0;

?>
</body>
</html>
