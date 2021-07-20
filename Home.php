<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
session_start();
$_SESSION = array();
session_destroy();
//$dbname = "game_data";
//$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if(mysqli_connect_error()){
	die("Database Connection failed : " ."(".  mysqli_connect_error() . ")"	);
}
$query = "CREATE DATABASE IF NOT EXISTS game_data;";
$result = mysqli_query($conn, $query);

$dbname = "game_data";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

$query = "CREATE TABLE IF NOT EXISTS login_info (name varchar(100),pass varchar(100),phone varchar(20),email varchar(50),username varchar(100))";
		$result = mysqli_query($conn, $query);
$query = "CREATE TABLE IF NOT EXISTS user_profile (p_name varchar(100),u_name varchar(100),rank int(11),status varchar(100),worth int(20),email varchar(100),phone varchar(20),c_image longblob,u_image longblob,pass varchar(100),about varchar(5000))";
		$result = mysqli_query($conn, $query);
$query = "CREATE TABLE IF NOT EXISTS company_img (c_img longblob,u_name varchar(100),price int(20),company_type varchar(50))";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Game</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/alignment.css">
	<link rel="stylesheet" type="text/css" href="css/style-grid.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class = "pad gd" style="background-color: gray;">

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
			<!--Navbar left side-->
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li class=""><a href="home.php">Home</a></li>
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">About <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="about_us.php">About</a></li>
						</ul>
					</li>
					<li><a href="#">Game Play</a></li>
					<li><a href="#">Instruction</a></li>
				</ul>
				<!-- -->
				<!--Login Signup -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
				<!--   -->
			</div>
		</div>
	</nav>
	<!--Body-->
	<div class="container center">
		<h2 class="al_cen c_white" style="color:white;text-weight:bold;"><b>Are you ready to Go ?</b></h2>
		<div class = "img-responsive">
			<div>
				<img src="img_gif/Health_Workers.gif" class = "d_pad" width="100%" height="500">
			</div>
			<div class = "row" class = "">

				<div class ="col-xs-6 c_col pad">
					<img src="img_gif/anim-large.gif" width="99%" height="99%">;
				</div>
				<div class ="col-xs-6 c_col pad">
					<img src="img_gif/speedcam.gif" width="99%" height="99%">
				</div>

			</div>
		</div>
		<div>
			<img src="img_gif/source.gif" width="100%" height="500">;
		</div>

	</div>
	<!-- -->
	<footer class="container-fluid f_c text-center" style="color:white;width:100%;">
		<p>MCM &copy; Copyright 2018-2018 Md. Rahmat Ullah</p>
		<p>Desktop version</p>
	</footer>
</body>
</html>
