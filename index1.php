<?php
      $dbhost = "localhost";
      $dbuser = "root";
      $dbpass = "";
      $dbname = "mf";
      $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
session_start();
      if(mysqli_connect_error()){
      	die("Database Connection failed : " ."(".  mysqli_connect_errno() . ")"
      		);
      }
      //else
      //	echo "You pass";
?>
<?php
$query = "SELECT * FROM student_name";
$result = mysqli_query($conn, $query);
if(!$result){
	die("you failed.");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SQL Connection</title>
</head>
<body>
<pre>
<?php
while($row = mysqli_fetch_row($result)){
	var_dump($row);
	//echo "<hr/";
}
?>
</pre>
</body>
</html>
<?php
mysqli_close($conn);
?>
