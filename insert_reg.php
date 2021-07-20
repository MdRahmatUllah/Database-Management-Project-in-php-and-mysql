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
	<title>Registration Data Insert</title>
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body style="background: url(img/bk.jpg)">

	<?php
//print_r($_POST);
	$fr_name = $_POST['f_name'];
	$fr_pass = $_POST['password'];
	$fr_phone = $_POST['p_number'];
	$fr_email = $_POST['email'];
	$fr_username = $_POST['u_name'];
	?>
	<?php
//
	$ch = "SELECT username, email, phone FROM login_info WHERE username='{$fr_username}' OR email='{$fr_email}' OR phone='{$fr_phone}';";
//

	$result_0 = mysqli_query($conn, $ch);

//print_r($result_0);

	if($xxx = mysqli_fetch_row($result_0))
	{
	//die("This user is exists");
		die('<div class="container">
			<form action="register.php" method="POST" class="form" autocomplete="off">
				<div class= "form-item">
					<h4>This user is exists</h4>
				</div>
				<div class="form-item">
					<button type="submit" class="button is-button">Register</button>
				</div>
			</form>
		</div>');
	}
	else
	{
		$query = "INSERT INTO login_info(name, pass, phone, email, username) VALUES('{$fr_name}', '{$fr_pass}', '{$fr_phone}', '{$fr_email}', '{$fr_username}')";
		$result = mysqli_query($conn, $query);

		if($result)
		{

			$query = "INSERT INTO user_profile(p_name, u_name, rank, status,worth,email,phone, c_image, u_image, pass, about) VALUES('{$fr_name}','{$fr_username}', 0,'Newbie', 1000000, '{$fr_email}', '{$fr_phone}', '','','{$fr_pass}','')";
			$result = mysqli_query($conn, $query);
	//die("Success </br>");
			$link='<div class="container">';
			$link .='<form action="update_info.php?id=';
			$link .=$fr_username.'" method="POST" class="form" autocomplete="off">
			<div class= "form-item">
				<h4>Successfully Registed</h4>
			</div>
			<div class="form-item">
				<button type="submit" class="button is-button">LOGIN</button>
			</div>
		</form>
	</div>';
	echo $link;

			/*$link = '<div class="container">';
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
echo $link;*/


}
else
{
	//die("Failed");
	die('<div class="container">
		<form action="start.php" method="POST" class="form" autocomplete="off">
			<div class= "form-item">
				<h4>Failed</h4>
			</div>
			<div class="form-item">
				<button type="submit" class="button is-button">LOGIN</button>
			</div>
		</form>
	</div>');
}
}

?>
</body>
</html>
