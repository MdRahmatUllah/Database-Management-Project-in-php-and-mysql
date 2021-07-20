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

if($_SESSION["user_name"]){
$primary = $_SESSION["user_name"];
}
else
{
  $primary = "";
}
//echo $primary;
?>
<?php


//echo $pro;

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Employee Informations</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/employee_list_style.css">
  <style type="text/css">
  .disabled {
        pointer-events: none;
        cursor: default;
        opacity: 0.9;
    }
    a{
      text-decoration: none;
    }
  </style>
</head>
<body class="bc site">
  <div class="img1 progress-bar progress" style="width: 100%;grid-column:1/81;grid-row:1/3">
    <h3  style=" padding : 20px; color: white;" class="btn btn-primary btn-block"><a style="color: white;" href="profile.php">PROFILE</a></h3>

  </div>
  <!--

-->
  <div class="img1"style="height:5px; grid-column:1/81;grid-row:3/4">
  </div>
  <div class="img"style="grid-column:1/81;grid-row:4/10">
    <!--<h3 style="text-align:center;">Designation goes here.</h3>-->
  </div>
  <?php
  $cu = 80;$cx=3;$cy=8;$rx=11;$r_p = 11;$ry=17;
  $query="SELECT * FROM employee_info order by designation";
  $result=mysqli_query($conn,$query);
  while($row = mysqli_fetch_array($result))
     {
      $e_img = $row['e_img'];
      $e_name = $row['e_name'];
      $e_skill = $row['e_skil'];
      $e_level = $row['e_level'];
      $e_taken = $row['taken'];
      $e_id = $row['id'];
      $e_salary = $row['salary'];
      $e_deg = $row['designation'];

      //echo $e_id.'</br>';

//p - bar
// skill
$pro = '<div>
  <div class="progress">
    <div  class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="'.$e_skill.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$e_skill.'%">
      '.'<p style ="color: black;"><b>'.$e_skill.'%</b></p>
    </div>
  </div>
</div>';
//level
$pro_le = '<div>
  <div class="progress">
    <div  class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="'.$e_level.'" aria-valuemin="0" aria-valuemax="100" style="width:'.$e_level.'%">
      '.'<p style ="color:black;"><b>'.$e_level.'%</b></p>
    </div>
  </div>
</div>';
//
$e_salary = $e_level*200 + $e_skill*2;
$e_level = $e_skill/100;
$e_skill = $e_skill%100;

$query_up='UPDATE employee_info  SET salary = '.$e_salary.' WHERE id = '.$e_id;
$result_up=mysqli_query($conn,$query_up);


      if($e_taken=='Available')
      {
        $take_button = '<div style="text-align:center;"><a class="btn btn-success" href="hair.php?id= '.$e_id.'">'.$e_taken.'</a></div>';
      }
      else
      {
        $take_button = '<div style="text-align:center;"><a href="employee_list.php" class="btn btn-danger disabled">'.'Not Available'.'</a></div>';

      }
      $p = '<div class="img-thumbnail" style="width: 100%; height: 450px; grid-column:';$p .=$cx-2;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx; $p.='/'; $p.= $rx+9 . '">';
      //echo $p;
      $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
      $p .= '<img alt="image" align="center" data-type="image" class="myImg img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
    //  echo $p;
        $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
        $p.='Skill : '.$pro;
        $p.='Level : '.$pro_le;
        $p.='<p>Name: '.$e_name.'</br>Designation: '.$e_deg.'</br>Salary: '.$e_salary.' $</p>';
        $p.=$take_button;
        $p.='</div></div>';
        echo $p;
        //echo '<div style="background-color:black;"></br></div>';
     $cx+=10;
     if($cx>=80){
       $p = '<div class="" style="width:100%; height: 20px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
       echo $p;
       $rx+=12;
       $cx=3;
     }
   }
  ?>
</body>
</html>
