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
//echo $prymary;
$total = 0.0;
?>
<!DOCTYPE html>
<html>
<head>
  <title>WorkShop</title>
  <link type="text/css" rel="stylesheet" href="css/make_game.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
    $enable = 1;
  ?>
  <div class="container">

    <div class="item header">

      <nav class="navbar navbar-expand-md navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="phone_config.php">SHOP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="employee_list.php">EMPLOYEE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.php">PROFILE</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="item sidebar">
      <?php
      $el = array("x","x","x","x","x","x");
      $level_count = 0;

      $query="SELECT e_level,e_skil,designation FROM employee_info WHERE taken = '{$prymary}';";
      //echo $query;
      $result=mysqli_query($conn,$query);
      while($row = mysqli_fetch_array($result))
      {
        $e_skill = $row['e_skil'];
        $e_level = $row['e_level'];
        $e_deg = $row['designation'];
        $level_count+=($e_skill + $e_level*100);
        if($e_deg == "Back and Developer")
        {
          $el[0]= '1';
        }
        else if($e_deg == "Front End Developer")
        {
          $el[1]= '1';
        }
        else if($e_deg == "Electronic Engineer")
        {
          $el[2]= '1';
        }
        else if($e_deg == "Hardware Engineer")
        {
          $el[3]= '1';
        }
        else if($e_deg == "Back and Developer")
        {
          $el[4]= '1';
        }
        else if($e_deg == "Metal expert" || $e_deg == "Market Analyzer")
        {
          $el[5]= '1';
        }
      }
      ?>
      <div style="text-align:center;">
        <h2>CompanySkill</h2>
        <?php
        if($level_count<2000)
        echo '<h3 style="color:red;">'.$level_count.'<h3>';
        else {
          echo '<h3 style="color:green;">'.$level_count.'<h3>';
        }
        ?>
        <?php
        if($level_count > 2000)
        {
          echo "<br><h3 style='color:green; font-weight: bold;'>You have Good Skills</h3><br>";
        }
        else {
          $enable = 0;
          echo "<br><h3 style='color:red; font-weight: bold;'>You need to hire more employee. Your employee skills are too low to build a product.</h3><br>";
        }
        ?>
        <?php
        if($el[0]!= '1' )
        {   $enable = 0;
          $e_deg = "You need at least one ";
          $e_deg .= "<span style='color : red;'>Back and Developer</span><br>";

          echo $e_deg;
          //  $el[0]= '1';
        }
        if($el[1]!='1')
        {   $enable = 0;
          $el[1]= '1';
          $e_deg = "You need at least one ";
          $e_deg .="<span style='color : red;'>Front end Developer</span><br>";
          echo $e_deg;
        }
        if($el[2]!='1')
        {   $enable = 0;
          $el[2]= '1';
          $e_deg = "You need at least one ";
          $e_deg .="<span style='color : red;'>Electronic Engineer</span><br>";
          echo $e_deg;
        }
        if($el[3]!='1')
        {   $enable = 0;
          $el[3]= '1';
          $e_deg = "You need at least one ";
          $e_deg .="<span style='color : red;'>Hardware Engineer</span><br>";
          echo $e_deg;
        }
        if($el[5]!='1')
        {   $enable = 0;
          $e_deg = "You need at least one ";
          $e_deg .= "<span style='color : red;'>Metal expert or Market Analyzer</span><br>";
          echo $e_deg;
        }
        ?>
      </div>
    </div>
    <div class="item content-1">
      <video controls = "" width = 100% height = 100% autoplay>
        <source src = "video/Bijoy Birthday video.mp4">
        </video>
      </div>
      <div class="item content-2">
        <div>
        <?php
        $query="SELECT * FROM phones_component WHERE c_name = '{$prymary}' AND done = 0;";
        //echo $query;
        $result=mysqli_query($conn,$query);
        if($row = mysqli_fetch_array($result));
        echo '<h3>Display : ';
        if($row['display'])
        {
          $total +=$row['display'];
          echo '<span style ="color:green; text-weight: bold;">Done<br></span>';
        }
        else {   $enable = 0;
          echo '<span style="color:red;">Purchase<br></span>';
        }

        echo '<h3>Batteries : ';
        if($row['batteries'])
        {
          $total +=$row['batteries'];
          echo '<span style ="color:green; text-weight: bold;">Done<br></span>';
        }
        else {   $enable = 0;
          echo '<span style="color:red;">Purchase<br></span>';
        }

        echo '<h3>Network : ';
        if($row['network_ic'])
        {
          $total +=$row['network_ic'];
          echo '<span style ="color:green; text-weight: bold;">Done<br></span>';
        }
        else {   $enable = 0;
          echo '<span style="color:red;">Purchase<br></span>';
        }

        echo '<h3>MB Or CPU : ';
        if($row['mother_bord']||$row['cpu'])
        {
          if($row['mother_bord'])
          $total +=$row['mother_bord'];
          else {
            $total +=$row['cpu'];
          }
          echo '<span style ="color:green; text-weight: bold;">Done<br></span>';
        }
        else {   $enable = 0;
          echo '<span style="color:red;">Purchase<br></span>';
        }

        echo '<h3>Antena switch : ';
        if($row['antenna_switch'])
        {
          $total +=$row['antenna_switch'];
          echo '<span style ="color:green; text-weight: bold;">Done<br></span>';
        }
        else {   $enable = 0;
          echo '<span style="color:red;">Purchase<br></span>';
        }

        echo '<h3>VCO : ';
        if($row['vco'])
        {
          $total +=$row['vco'];
          echo '<span style ="color:green; text-weight: bold;">Done<br></span>';
        }
        else {   $enable = 0;
          echo '<span style="color:red;">Purchase<br></span>';
        }
        ?>
      </div>
      </div>
      <div class="item content-3">
        <div>
          <?php
          echo '<h3>RX or TX- Filter : ';
          if($row['rx_filter']||$row['tx_filter'])
          {
            if($row['rx_filter'])
            $total +=$row['rx_filter'];
            else {
                $total +=$row['tx_filter'];
            }
            echo '<span style ="color:green; text-weight: bold;">Done<br></span>';
          }
          else {   $enable = 0;
            echo '<span style="color:red;">Purchase<br></span>';
          }

          echo '<h3>ROM : ';
          if($row['rom'])
          {
            $total +=$row['rom'];
            echo '<span style ="color:green; text-weight: bold;">Done<br></span>';
          }
          else { //  $enable = 0;
            echo '<span style="color:gray;">Purchase<br></span>';
          }

          echo '<h3>RAM : ';
          if($row['ram'])
          {
            $total +=$row['ram'];
            echo '<span style ="color:green; text-weight: bold;">Done<br></span>';
          }
          else {   $enable = 0;
            echo '<span style="color:red;">Purchase<br></span>';
          }

          echo '<h3>Power : ';
          if($row['power_ic'])
          {
            $total +=$row['power_ic'];
            echo '<span style ="color:green; text-weight: bold;">Done<br></span>';
          }
          else {   $enable = 0;
            echo '<span style="color:red;">Purchase<br></span>';
          }

          echo '<h3>Speakers : ';
          if($row['speaker'])
          {
            $total +=$row['speaker'];
            echo '<span style ="color:green; text-weight: bold;">Done<br></span>';
          }
          else {   $enable = 0;
            echo '<span style="color:red;">Purchase<br></span>';
          }

          echo '<h3>Microphone : ';
          if($row['microphone'])
          {
            $total +=$row['microphone'];
            echo '<span style ="color:green; text-weight: bold;">Done<br></span>';
          }
          else {   $enable = 0;
            echo '<span style="color:red;">Purchase<br></span>';
          }

          echo '<h3>Camera : ';
          if($row['camera'])
          {
            $total +=$row['camera'];
            echo '<span style ="color:green; text-weight: bold;">Done<br></span>';
          }
          else {   $enable = 0;
            echo '<span style="color:red;">Purchase<br></span>';
          }
          ?>
        </div>
      </div>
      <div class="item footer">
        <div>
        <?php
        if($enable == 1)
        {
          $px = '<a href="start_making.php?price='.$total.'" class="btn btn-success">Start Making</a>';
          echo $px;
        }
        else {
          $px = '<a href="#" class="btn btn-danger">Need To Improve The Company</a>';
            echo $px;
        }

         ?>
</div>
      </div>
    </div>
  </div>
</body>
</html>
