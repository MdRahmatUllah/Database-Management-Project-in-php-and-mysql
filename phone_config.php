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
?>
<!DOCTYPE html>
<html>
<head>
  <title>Configaration Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/employee_list_style.css">
</head>
<body class="bc site" style="background-color:azure;">
  <div class="img1 progress-bar progress-bar-success progress-bar-striped active" style="width: 100%;grid-column:1/81;grid-row:1/3">
    <h3  style=" padding : 20px; color: white;" class="btn btn-primary btn-block"><a style="color: white;" href="profile.php">PROFILE</a></h3>

  </div>
  <div class="img1"style="height:5px; grid-column:1/81;grid-row:3/4">
  </div>
  <div class="img"style="grid-column:1/81;grid-row:4/10">
  <!--  <h3 style="text-align:center;">Designation goes here.</h3>-->
  </div>
  <?php
  $cu = 80;$cx=3;$cy=8;$rx=11;$r_p = 11;$ry=17;

//Display part
$cx=3;$cy=8;
   $query="SELECT * FROM display order by price asc";
   $result=mysqli_query($conn,$query);
   $fl = 0;

   echo '<div class=""style=" grid-column:1/81;">
      <h3 style="text-align:center;">Display</h3>
    </div>';

   while($row = mysqli_fetch_array($result))
      {
        $fl = 1;
       $e_img = $row['img'];
       $e_name = $row['x_name'];
       $e_skill = $row['model'];
       $e_level = $row['price'];

       $take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=display'.'&pr='.$e_level.'">Purchase</a></div>';

       $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
       $p .=$cx-2;
       $p.='/';
       $p.=$cx+7;
       $p.=';grid-row:';
       $p.='">';
       //echo $p;
       $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
       $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
     //  echo $p;
         $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
         $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
         $p.='</div>'.$take_button.'</div>';
         echo $p;

           //echo $take_button;
         //echo '<div style="background-color:black;"></br></div>';
      $cx+=10;
      if($cx>=80){
        $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
        echo $p;
        $rx+=10;
        $cx=3;
      }
    }
    if($fl==0)
    {
     echo '<div class=""style="grid-column:1/81;">
        <h3 style="text-align:center;">Empty</h3>
      </div>';
    }

   // end display part
   //batteries
$cx=3;$cy=8;
   $query="SELECT * FROM batteries order by price asc";
   $result=mysqli_query($conn,$query);
   $fl = 0;

   echo '<div class=""style=" grid-column:1/81;">
      <h3 style="text-align:center;">Batteries</h3>
    </div>';

   while($row = mysqli_fetch_array($result))
      {
        $fl = 1;
       $e_img = $row['img'];
       $e_name = $row['x_name'];
       $e_skill = $row['model'];
       $e_level = $row['price'];
       $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
       $p .=$cx-2;
       $p .='/';
       $p .=$cx+7;
       $p .=';grid-row:';
       $p .='">';
       //echo $p;
$take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=batteries'.'&pr='.$e_level.'">Purchase</a></div>';

       $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
       $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
     //  echo $p;
         $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
         $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
         $p.='</div>'.$take_button.'</div>';
         echo $p;
         //echo '<div style="background-color:black;"></br></div>';
      $cx+=10;
      if($cx>=80){
        $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
        echo $p;
        $rx+=10;
        $cx=3;
      }
    }
    if($fl==0)
    {
     echo '<div class=""style="grid-column:1/81;">
        <h3 style="text-align:center;">Empty</h3>
      </div>';
    }

   //end batteries part
   //network_ic
   $cx=3;$cy=8;
   $query="SELECT * FROM network_ic order by price asc";
   $result=mysqli_query($conn,$query);
   $fl = 0;

   echo '<div class=""style=" grid-column:1/81;">
      <h3 style="text-align:center;">Network IC</h3>
    </div>';

   while($row = mysqli_fetch_array($result))
      {
        $fl = 1;
       $e_img = $row['img'];
       $e_name = $row['x_name'];
       $e_skill = $row['model'];
       $e_level = $row['price'];
       $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
       $p .=$cx-2;
       $p.='/';
       $p.=$cx+7;
       $p.=';grid-row:';
       $p.='">';
       //echo $p;
$take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=network_ic'.'&pr='.$e_level.'">Purchase</a></div>';

       $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
       $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
     //  echo $p;
         $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
         $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
         $p.='</div>'.$take_button.'</div>';
         echo $p;
         //echo '<div style="background-color:black;"></br></div>';
      $cx+=10;
      if($cx>=80){
        $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
        echo $p;
        $rx+=10;
        $cx=3;
      }
    }
    if($fl==0)
    {
     echo '<div class=""style="grid-column:1/81; color:red;">
        <h3 style="text-align:center;">Empty</h3>
      </div>';
    }
   //end network_ic
   //mother_bord
$cx=3;$cy=8;
   $query="SELECT * FROM mother_bord order by price asc";
   $result=mysqli_query($conn,$query);
   $fl = 0;

   echo '<div class=""style=" grid-column:1/81;">
      <h3 style="text-align:center;">Mother Board</h3>
    </div>';

   while($row = mysqli_fetch_array($result))
      {
        $fl = 1;
       $e_img = $row['img'];
       $e_name = $row['x_name'];
       $e_skill = $row['model'];
       $e_level = $row['price'];
       $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
       $p .=$cx-2;
       $p.='/';
       $p.=$cx+7;
       $p.=';grid-row:';
       $p.='">';
       //echo $p;
$take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=mother_bord'.'&pr='.$e_level.'">Purchase</a></div>';

       $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
       $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
     //  echo $p;
         $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
         $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
         $p.='</div>'.$take_button.'</div>';
         echo $p;
         //echo '<div style="background-color:black;"></br></div>';
      $cx+=10;
      if($cx>=80){
        $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
        echo $p;
        $rx+=10;
        $cx=3;
      }
    }
    if($fl==0)
    {
     echo '<div class=""style="grid-column:1/81; color:red;">
        <h3 style="text-align:center;">Empty</h3>
      </div>';
    }

   //end mother_bord
   //antenna_switch
   $cx=3;$cy=8;
      $query="SELECT * FROM antenna_switch order by price asc";
      $result=mysqli_query($conn,$query);
      $fl = 0;

      echo '<div class=""style=" grid-column:1/81;">
         <h3 style="text-align:center;">Antena Switch</h3>
       </div>';

      while($row = mysqli_fetch_array($result))
         {
           $fl = 1;
          $e_img = $row['img'];
          $e_name = $row['x_name'];
          $e_skill = $row['model'];
          $e_level = $row['price'];
          $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
          $p .=$cx-2;
          $p.='/';
          $p.=$cx+7;
          $p.=';grid-row:';
          $p.='">';
          //echo $p;
$take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=antenna_switch'.'&pr='.$e_level.'">Purchase</a></div>';

          $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
          $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
        //  echo $p;
            $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
            $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
            $p.='</div>'.$take_button.'</div>';
            echo $p;
            //echo '<div style="background-color:black;"></br></div>';
         $cx+=10;
         if($cx>=80){
           $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
           echo $p;
           $rx+=10;
           $cx=3;
         }
       }
       if($fl==0)
       {
        echo '<div class=""style="grid-column:1/81; color:red;">
           <h3 style="text-align:center;">Empty</h3>
         </div>';
       }
   // end antenna_switch
   //crystal_oscilator

   $cx=3;$cy=8;
      $query="SELECT * FROM crystal_oscilator order by price asc";
      $result=mysqli_query($conn,$query);
      $fl = 0;

      echo '<div class=""style=" grid-column:1/81;">
         <h3 style="text-align:center;">Crystal Oscilator</h3>
       </div>';

      while($row = mysqli_fetch_array($result))
         {
           $fl = 1;
          $e_img = $row['img'];
          $e_name = $row['x_name'];
          $e_skill = $row['model'];
          $e_level = $row['price'];
          $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
          $p .=$cx-2;
          $p.='/';
          $p.=$cx+7;
          $p.=';grid-row:';
          $p.='">';
          //echo $p;
$take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=crystal_oscilator'.'&pr='.$e_level.'">Purchase</a></div>';

          $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
          $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
        //  echo $p;
            $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
            $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
            $p.='</div>'.$take_button.'</div>';
            echo $p;
            //echo '<div style="background-color:black;"></br></div>';
         $cx+=10;
         if($cx>=80){
           $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
           echo $p;
           $rx+=10;
           $cx=3;
         }
       }
       if($fl==0)
       {
        echo '<div class=""style="grid-column:1/81; color:red;">
           <h3 style="text-align:center;">Empty</h3>
         </div>';
       }

   // end crystal_oscilator
   //vco

   $cx=3;$cy=8;
      $query="SELECT * FROM vco order by price asc";
      $result=mysqli_query($conn,$query);
      $fl = 0;

      echo '<div class=""style=" grid-column:1/81;">
         <h3 style="text-align:center;">VCO</h3>
       </div>';

      while($row = mysqli_fetch_array($result))
         {
           $fl = 1;
          $e_img = $row['img'];
          $e_name = $row['x_name'];
          $e_skill = $row['model'];
          $e_level = $row['price'];
          $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
          $p .=$cx-2;
          $p.='/';
          $p.=$cx+7;
          $p.=';grid-row:';
          $p.='">';
          //echo $p;
$take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=vco'.'&pr='.$e_level.'">Purchase</a></div>';

          $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
          $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
        //  echo $p;
            $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
            $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
            $p.='</div>'.$take_button.'</div>';
            echo $p;
            //echo '<div style="background-color:black;"></br></div>';
         $cx+=10;
         if($cx>=80){
           $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
           echo $p;
           $rx+=10;
           $cx=3;
         }
       }
       if($fl==0)
       {
        echo '<div class=""style="grid-column:1/81; color:red;">
           <h3 style="text-align:center;">Empty</h3>
         </div>';
       }

   //end vco

   //rx_filter
   $cx=3;$cy=8;
      $query="SELECT * FROM rx_filter order by price asc";
      $result=mysqli_query($conn,$query);
      $fl = 0;

      echo '<div class=""style=" grid-column:1/81;">
         <h3 style="text-align:center;">RX-Filter</h3>
       </div>';

      while($row = mysqli_fetch_array($result))
         {
           $fl = 1;
          $e_img = $row['img'];
          $e_name = $row['x_name'];
          $e_skill = $row['model'];
          $e_level = $row['price'];
          $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
          $p .=$cx-2;
          $p.='/';
          $p.=$cx+7;
          $p.=';grid-row:';
          $p.='">';
          //echo $p;
$take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=rx_filter'.'&pr='.$e_level.'">Purchase</a></div>';

          $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
          $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
        //  echo $p;
            $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
            $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
            $p.='</div>'.$take_button.'</div>';
            echo $p;
            //echo '<div style="background-color:black;"></br></div>';
         $cx+=10;
         if($cx>=80){
           $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
           echo $p;
           $rx+=10;
           $cx=3;
         }
       }
       if($fl==0)
       {
        echo '<div class=""style="grid-column:1/81; color:red;">
           <h3 style="text-align:center;">Empty</h3>
         </div>';
       }

   //tx_filter
   $cx=3;$cy=8;
      $query="SELECT * FROM tx_filter order by price asc";
      $result=mysqli_query($conn,$query);
      $fl = 0;

      echo '<div class=""style=" grid-column:1/81;">
         <h3 style="text-align:center;">TX-Filter</h3>
       </div>';

      while($row = mysqli_fetch_array($result))
         {
           $fl = 1;
          $e_img = $row['img'];
          $e_name = $row['x_name'];
          $e_skill = $row['model'];
          $e_level = $row['price'];

$take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=tx_filter'.'&pr='.$e_level.'">Purchase</a></div>';

          $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
          $p .=$cx-2;
          $p.='/';
          $p.=$cx+7;
          $p.=';grid-row:';
          $p.='">';
          //echo $p;
          $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
          $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
        //  echo $p;
            $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
            $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
            $p.='</div>'.$take_button.'</div>';
            echo $p;
            //echo '<div style="background-color:black;"></br></div>';
         $cx+=10;
         if($cx>=80){
           $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
           echo $p;
           $rx+=10;
           $cx=3;
         }
       }
       if($fl==0)
       {
        echo '<div class=""style="grid-column:1/81; color:red;">
           <h3 style="text-align:center;">Empty</h3>
         </div>';
       }
   //end tx_filter

   //rom
   $cx=3;$cy=8;
      $query="SELECT * FROM rom order by price asc";
      $result=mysqli_query($conn,$query);
      $fl = 0;

      echo '<div class=""style=" grid-column:1/81;">
         <h3 style="text-align:center;">ROM</h3>
       </div>';

      while($row = mysqli_fetch_array($result))
         {
           $fl = 1;
          $e_img = $row['img'];
          $e_name = $row['x_name'];
          $e_skill = $row['model'];
          $e_level = $row['price'];
          $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
          $p .=$cx-2;
          $p.='/';
          $p.=$cx+7;
          $p.=';grid-row:';
          $p.='">';
          //echo $p;
$take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=rom'.'&pr='.$e_level.'">Purchase</a></div>';

          $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
          $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
        //  echo $p;
            $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
            $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
            $p.='</div>'.$take_button.'</div>';
            echo $p;
            //echo '<div style="background-color:black;"></br></div>';
         $cx+=10;
         if($cx>=80){
           $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
           echo $p;
           $rx+=10;
           $cx=3;
         }
       }
       if($fl==0)
       {
        echo '<div class=""style="grid-column:1/81; color:red;">
           <h3 style="text-align:center;">Empty</h3>
         </div>';
       }
   //end rom

   //ram
   $cx=3;$cy=8;
      $query="SELECT * FROM ram order by price asc";
      $result=mysqli_query($conn,$query);
      $fl = 0;

      echo '<div class=""style=" grid-column:1/81;">
         <h3 style="text-align:center;">RAM</h3>
       </div>';

      while($row = mysqli_fetch_array($result))
         {
           $fl = 1;
          $e_img = $row['img'];
          $e_name = $row['x_name'];
          $e_skill = $row['model'];
          $e_level = $row['price'];

$take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=ram'.'&pr='.$e_level.'">Purchase</a></div>';

          $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
          $p .=$cx-2;
          $p.='/';
          $p.=$cx+7;
          $p.=';grid-row:';
          $p.='">';
          //echo $p;
          $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
          $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
        //  echo $p;
            $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
            $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
            $p.='</div>'.$take_button.'</div>';
            echo $p;
            //echo '<div style="background-color:black;"></br></div>';
         $cx+=10;
         if($cx>=80){
           $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
           echo $p;
           $rx+=10;
           $cx=3;
         }
       }
       if($fl==0)
       {
        echo '<div class=""style="grid-column:1/81; color:red;">
           <h3 style="text-align:center;">Empty</h3>
         </div>';
       }
   //end ram

   //flash_ic
   $cx=3;$cy=8;
      $query="SELECT * FROM flash_ic order by price asc";
      $result=mysqli_query($conn,$query);
      $fl = 0;

      echo '<div class=""style=" grid-column:1/81;">
         <h3 style="text-align:center;">Flash</h3>
       </div>';

      while($row = mysqli_fetch_array($result))
         {
           $fl = 1;
          $e_img = $row['img'];
          $e_name = $row['x_name'];
          $e_skill = $row['model'];
          $e_level = $row['price'];
          $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
          $p .=$cx-2;
          $p.='/';
          $p.=$cx+7;
          $p.=';grid-row:';
          $p.='">';
          //echo $p;
$take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=flash_ic'.'&pr='.$e_level.'">Purchase</a></div>';

          $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
          $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
        //  echo $p;
            $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
            $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
            $p.='</div>'.$take_button.'</div>';
            echo $p;
            //echo '<div style="background-color:black;"></br></div>';
         $cx+=10;
         if($cx>=80){
           $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
           echo $p;
           $rx+=10;
           $cx=3;
         }
       }
       if($fl==0)
       {
        echo '<div class=""style="grid-column:1/81; color:red;">
           <h3 style="text-align:center;">Empty</h3>
         </div>';
       }
   //end flash_ic

   //power_ic
   $cx=3;$cy=8;
      $query="SELECT * FROM power_ic order by price asc";
      $result=mysqli_query($conn,$query);
      $fl = 0;

      echo '<div class=""style=" grid-column:1/81;">
         <h3 style="text-align:center;">Power</h3>
       </div>';

      while($row = mysqli_fetch_array($result))
         {
           $fl = 1;
          $e_img = $row['img'];
          $e_name = $row['x_name'];
          $e_skill = $row['model'];
          $e_level = $row['price'];
          $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
          $p .=$cx-2;
          $p.='/';
          $p.=$cx+7;
          $p.=';grid-row:';
          $p.='">';
          //echo $p;
$take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=power_ic'.'&pr='.$e_level.'">Purchase</a></div>';

          $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
          $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
        //  echo $p;
            $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
            $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
            $p.='</div>'.$take_button.'</div>';
            echo $p;
            //echo '<div style="background-color:black;"></br></div>';
         $cx+=10;
         if($cx>=80){
           $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
           echo $p;
           $rx+=10;
           $cx=3;
         }
       }
       if($fl==0)
       {
        echo '<div class=""style="grid-column:1/81; color:red;">
           <h3 style="text-align:center;">Empty</h3>
         </div>';
       }
   //end power_ic

   //charging_ic
   $cx=3;$cy=8;
      $query="SELECT * FROM charging_ic order by price asc";
      $result=mysqli_query($conn,$query);
      $fl = 0;

      echo '<div class=""style=" grid-column:1/81;">
         <h3 style="text-align:center;">Charging IC</h3>
       </div>';

      while($row = mysqli_fetch_array($result))
         {
           $fl = 1;
          $e_img = $row['img'];
          $e_name = $row['x_name'];
          $e_skill = $row['model'];
          $e_level = $row['price'];

          $take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=charging_ic'.'&pr='.$e_level.'">Purchase</a></div>';

          $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
          $p .=$cx-2;
          $p.='/';
          $p.=$cx+7;
          $p.=';grid-row:';
          $p.='">';
          //echo $p;
          $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
          $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
        //  echo $p;
            $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
            $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
            $p.='</div>'.$take_button.'</div>';
            echo $p;
            //echo '<div style="background-color:black;"></br></div>';
         $cx+=10;
         if($cx>=80){
           $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
           echo $p;
           $rx+=10;
           $cx=3;
         }
       }
       if($fl==0)
       {
        echo '<div class=""style="grid-column:1/81; color:red;">
           <h3 style="text-align:center;">Empty</h3>
         </div>';
       }
   //end charging_ic

   //rtc
   $cx=3;$cy=8;
      $query="SELECT * FROM rtc order by price asc";
      $result=mysqli_query($conn,$query);
      $fl = 0;

      echo '<div class=""style=" grid-column:1/81;">
         <h3 style="text-align:center;">RTC</h3>
       </div>';

      while($row = mysqli_fetch_array($result))
         {
           $fl = 1;
          $e_img = $row['img'];
          $e_name = $row['x_name'];
          $e_skill = $row['model'];
          $e_level = $row['price'];

          $take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=rtc'.'&pr='.$e_level.'">Purchase</a></div>';

          $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
          $p .=$cx-2;
          $p.='/';
          $p.=$cx+7;
          $p.=';grid-row:';
          $p.='">';
          //echo $p;
          $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
          $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
        //  echo $p;
            $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
            $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
            $p.='</div>'.$take_button.'</div>';
            echo $p;
            //echo '<div style="background-color:black;"></br></div>';
         $cx+=10;
         if($cx>=80){
           $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
           echo $p;
           $rx+=10;
           $cx=3;
         }
       }
       if($fl==0)
       {
        echo '<div class=""style="grid-column:1/81; color:red;">
           <h3 style="text-align:center;">Empty</h3>
         </div>';
       }
   //end rtc

   //cpu
   $cx=3;$cy=8;
      $query="SELECT * FROM cpu order by price asc";
      $result=mysqli_query($conn,$query);
      $fl = 0;

      echo '<div class=""style=" grid-column:1/81;">
         <h3 style="text-align:center;">CPU</h3>
       </div>';

      while($row = mysqli_fetch_array($result))
         {
           $fl = 1;
          $e_img = $row['img'];
          $e_name = $row['x_name'];
          $e_skill = $row['model'];
          $e_level = $row['price'];

          $take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=cpu'.'&pr='.$e_level.'">Purchase</a></div>';

          $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
          $p .=$cx-2;
          $p.='/';
          $p.=$cx+7;
          $p.=';grid-row:';
          $p.='">';
          //echo $p;
          $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
          $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
        //  echo $p;
            $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
            $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
            $p.='</div>'.$take_button.'</div>';
            echo $p;
            //echo '<div style="background-color:black;"></br></div>';
         $cx+=10;
         if($cx>=80){
           $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
           echo $p;
           $rx+=10;
           $cx=3;
         }
       }
       if($fl==0)
       {
        echo '<div class=""style="grid-column:1/81; color:red;">
           <h3 style="text-align:center;">Empty</h3>
         </div>';
       }
   //end cpu

   //logic_ic
   $cx=3;$cy=8;
      $query="SELECT * FROM logic_ic order by price asc";
      $result=mysqli_query($conn,$query);
      $fl = 0;

      echo '<div class=""style=" grid-column:1/81;">
         <h3 style="text-align:center;">Logicial IC or UIC</h3>
       </div>';

      while($row = mysqli_fetch_array($result))
         {
           $fl = 1;
          $e_img = $row['img'];
          $e_name = $row['x_name'];
          $e_skill = $row['model'];
          $e_level = $row['price'];

          $take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=logic_ic'.'&pr='.$e_level.'">Purchase</a></div>';

          $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
          $p .=$cx-2;
          $p.='/';
          $p.=$cx+7;
          $p.=';grid-row:';
          $p.='">';
          //echo $p;
          $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
          $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
        //  echo $p;
            $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
            $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
            $p.='</div>'.$take_button.'</div>';
            echo $p;
            //echo '<div style="background-color:black;"></br></div>';
         $cx+=10;
         if($cx>=80){
           $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
           echo $p;
           $rx+=10;
           $cx=3;
         }
       }
       if($fl==0)
       {
        echo '<div class=""style="grid-column:1/81; color:red;">
           <h3 style="text-align:center;">Empty</h3>
         </div>';
       }
   //end logic_ic

   //audio_ic
   $cx=3;$cy=8;
      $query="SELECT * FROM audio_ic order by price asc";
      $result=mysqli_query($conn,$query);
      $fl = 0;

      echo '<div class=""style=" grid-column:1/81;">
         <h3 style="text-align:center;">Audio</h3>
       </div>';

      while($row = mysqli_fetch_array($result))
         {
           $fl = 1;
          $e_img = $row['img'];
          $e_name = $row['x_name'];
          $e_skill = $row['model'];
          $e_level = $row['price'];

          $take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=audio_ic'.'&pr='.$e_level.'">Purchase</a></div>';

          $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
          $p .=$cx-2;
          $p.='/';
          $p.=$cx+7;
          $p.=';grid-row:';
          $p.='">';
          //echo $p;
          $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
          $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
        //  echo $p;
            $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
            $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
            $p.='</div>'.$take_button.'</div>';
            echo $p;
            //echo '<div style="background-color:black;"></br></div>';
         $cx+=10;
         if($cx>=80){
           $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
           echo $p;
           $rx+=10;
           $cx=3;
         }
       }
       if($fl==0)
       {
        echo '<div class=""style="grid-column:1/81; color:red;">
           <h3 style="text-align:center;">Empty</h3>
         </div>';
       }
   //end audio_ic

   //speaker
   $cx=3;$cy=8;
      $query="SELECT * FROM speaker order by price asc";
      $result=mysqli_query($conn,$query);
      $fl = 0;

      echo '<div class=""style=" grid-column:1/81;">
         <h3 style="text-align:center;">Speakers</h3>
       </div>';

      while($row = mysqli_fetch_array($result))
         {
           $fl = 1;
          $e_img = $row['img'];
          $e_name = $row['x_name'];
          $e_skill = $row['model'];
          $e_level = $row['price'];

          $take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=speaker'.'&pr='.$e_level.'">Purchase</a></div>';

          $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
          $p .=$cx-2;
          $p.='/';
          $p.=$cx+7;
          $p.=';grid-row:';
          $p.='">';
          //echo $p;
          $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
          $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
        //  echo $p;
            $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
            $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
            $p.='</div>'.$take_button.'</div>';
            echo $p;
            //echo '<div style="background-color:black;"></br></div>';
         $cx+=10;
         if($cx>=80){
           $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
           echo $p;
           $rx+=10;
           $cx=3;
         }
       }
       if($fl==0)
       {
        echo '<div class=""style="grid-column:1/81; color:red;">
           <h3 style="text-align:center;">Empty</h3>
         </div>';
       }
   //end speaker

   //microphone
   $cx=3;$cy=8;
      $query="SELECT * FROM microphone order by price asc";
      $result=mysqli_query($conn,$query);
      $fl = 0;

      echo '<div class=""style=" grid-column:1/81;">
         <h3 style="text-align:center;">Microphone</h3>
       </div>';

      while($row = mysqli_fetch_array($result))
         {
           $fl = 1;
          $e_img = $row['img'];
          $e_name = $row['x_name'];
          $e_skill = $row['model'];
          $e_level = $row['price'];

          $take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=microphone'.'&pr='.$e_level.'">Purchase</a></div>';

          $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
          $p .=$cx-2;
          $p.='/';
          $p.=$cx+7;
          $p.=';grid-row:';
          $p.='">';
          //echo $p;
          $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
          $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
        //  echo $p;
            $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
            $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
            $p.='</div>'.$take_button.'</div>';
            echo $p;
            //echo '<div style="background-color:black;"></br></div>';
         $cx+=10;
         if($cx>=80){
           $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
           echo $p;
           $rx+=10;
           $cx=3;
         }
       }
       if($fl==0)
       {
        echo '<div class=""style="grid-column:1/81; color:red;">
           <h3 style="text-align:center;">Empty</h3>
         </div>';
       }
   //end microphone

   //vibrator
   $cx=3;$cy=8;
      $query="SELECT * FROM vibrator order by price asc";
      $result=mysqli_query($conn,$query);
      $fl = 0;

      echo '<div class=""style=" grid-column:1/81;">
         <h3 style="text-align:center;">Vibrator</h3>
       </div>';

      while($row = mysqli_fetch_array($result))
         {
           $fl = 1;
          $e_img = $row['img'];
          $e_name = $row['x_name'];
          $e_skill = $row['model'];
          $e_level = $row['price'];

          $take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=vibrator'.'&pr='.$e_level.'">Purchase</a></div>';

          $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
          $p .=$cx-2;
          $p.='/';
          $p.=$cx+7;
          $p.=';grid-row:';
          $p.='">';
          //echo $p;
          $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
          $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
        //  echo $p;
            $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
            $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
            $p.='</div>'.$take_button.'</div>';
            echo $p;
            //echo '<div style="background-color:black;"></br></div>';
         $cx+=10;
         if($cx>=80){
           $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
           echo $p;
           $rx+=10;
           $cx=3;
         }
       }
       if($fl==0)
       {
        echo '<div class=""style="grid-column:1/81; color:red;">
           <h3 style="text-align:center;">Empty</h3>
         </div>';
       }
   //end vibrator

   //camera
   $cx=3;$cy=8;
      $query="SELECT * FROM camera order by price asc";
      $result=mysqli_query($conn,$query);
      $fl = 0;

      echo '<div class=""style=" grid-column:1/81;">
         <h3 style="text-align:center;">Camera</h3>
       </div>';

      while($row = mysqli_fetch_array($result))
         {
           $fl = 1;
          $e_img = $row['img'];
          $e_name = $row['x_name'];
          $e_skill = $row['model'];
          $e_level = $row['price'];

          $take_button = '<div style="text-align:center;"><a class="btn btn-success" href="purchase.php?model= '.$e_skill.'&table=camera'.'&pr='.$e_level.'">Purchase</a></div>';
          $p = '<div class="img-thumbnail" style="width: 100%; height: 350px; grid-column:';
          $p .=$cx-2;
          $p.='/';
          $p.=$cx+7;
          $p.=';grid-row:';
          $p.='">';
          //echo $p;
          $p.='<div class="" style="grid-column:';$p .=$cx;$p.='/'; $p.=$cx+5; $p.=';grid-row:'; $p.= $rx+1; $p.='/'; $p.= $rx+6 . '">';
          $p .= '<img alt="image" align="center" data-type="image" class="img-responsive" src="data:image/jpeg;base64,'.base64_encode($e_img).' " style="width: 100%; height: 150px; object-fit: cover;"></br></div>';
        //  echo $p;
            $p.='<div class=" overflow: auto;" style="height:100px; grid-column:';$p .=$cx - 1;$p.='/'; $p.=$cx+7; $p.=';grid-row:'; $p.= $rx + 6 ; $p.='/'; $p.= $rx+9 . '">';
            $p.='<p>Name: '.$e_name.'</br>Model: '.$e_skill.'</br>Price: '.$e_level.' $</p>';
            $p.='</div>'.$take_button.'</div>';
            echo $p;
            //echo '<div style="background-color:black;"></br></div>';
         $cx+=10;
         if($cx>=80){
           $p = '<div class="" style="width:100%; height: 100px;grid-column:1/81;'; $p.='grid-row:'; $p.= $rx+9; $p.='/'; $p.= $rx+10 . '"></div>';
           echo $p;
           $rx+=10;
           $cx=3;
         }
       }
       if($fl==0)
       {
        echo '<div class=""style="grid-column:1/81; color:red;">
           <h3 style="text-align:center;">Empty</h3>
         </div>';
       }
   //end camera
  ?>
</body>
</html>
