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
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All User Profiles</title>
    <link rel="stylesheet" href="css/upa.css">
  </head>
  <body class="p1">
    <div class="nav_section">

    </div>
    <div class="side_left">

    </div>
    <div class="side_right">

    </div>
    <div class="loop_section">

    </div>

    <?php
    $cu = 80;$cx=3;$cy=8;$rx=11;$r_p = 11;$ry=17;
    $query="SELECT * FROM user_profile";
    $result=mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($result))
       {
        $img = $row['u_image'];
        $name = $row['p_name'];
        $rank = $row['rank'];
        $phone = $row['phone'];
        $status = $row['status'];
        $worth = $row['worth'];
        $p = '<div class="img-thumbnail" style="width: 100%; height: 250px; grid-column:';$p .=$cx-2;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx; $p.='/'; $p.= $rx+9 . '">';
        //echo $p;
        $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
        $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
      //  echo $p;
          $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
          $p.='<p>Name: '.$e_name.'</br>Skill: '.$e_skill.'</br>Level: '.$e_level.'</p>';
          $p.='</div></div>';
          echo $p;
          //echo '<div style="background-color:black;"></br></div>';
       $cx+=10;
       if($cx>=80){
         $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
         echo $p;
         $rx+=10;
         $cx=3;
       }}
    ?>

  </body>
</html>
