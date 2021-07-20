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
	<title>Game</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/alignment.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class = "pad">

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
					<li class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Navbar <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">About</a></li>
							<li><a href="home.php">Home</a></li>
							<li><a href="#">Game Play</a></li>
							<li><a href="#">Instruction</a></li>
						</ul>
					</li>
				</ul>
				<!-- -->
				<!--Login Signup -->
				<ul class="nav navbar-nav navbar-right">
					<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> DashBoard</a></li>
					<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> WorkShop</a></li>
					<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
					<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Research</a></li>
					<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Employee</a></li>
					<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sales</a></li>
					<li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Mobiles</a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
				</ul>
				<!--   -->
			</div>
		</div>
	</nav>
	<!--Body-->
	<div class="container center">
		<div class = "img-responsive">
			<div>
				<img src="img/up.jpg" class = "d_pad" width="100%" height="500">
			</div>
			<div class = "row" class = "">

				<div class ="col-xs-6 c_col pad">
					<img src="img/global-business.jpg" width="99%" height="99%">;
				</div>
				<div class ="col-xs-6 c_col pad">
					<img src="img/global-business.jpg" width="99%" height="99%">
				</div>

			</div>
		</div>
		<div>
			<img src="img/global-business.jpg" width="100%" height="500">;
		</div>

	</div>
	<!-- -->
	<footer class="container-fluid f_c text-center">
		<p>MDG @ Copyright 2018-2018 Md. Rahmat Ullah</p>
		<p>The only Game contests Web 2.0 platform</p>
		<p>Desktop version, switch to mobile version.</p>
		<p>Privacy Policy</p>
	</footer>
</body>
</html>
