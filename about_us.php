<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/about_us.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="site" style="background-color:#b5b5b5;">
  <div class="nav_bar">

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

  </div>

  <div class="cover_img">
    <img src="img_gif/source.gif" alt="cover" style="overflow:auto; height: 350px; width: 100%;">
  </div>

  <div class="rating">
    <p style="text-align: center;">rated “overwhelmingly positive” based on
      friends reviews from Steam. 1/ Feb/ 2018
    </p>
    <p style="font-size:25px; text-align:center;">Replay Phones history. Create best selling Phones.
      Research new technologies. Become the leader<br>
      of the market and gain worldwide fans.
    </p>

  </div>

  <div class="game">
    <h3>Mobile Company Management</h3>
    <p style="font-size:15px;">
      Mobile Company Management (MCM) is a business simulation game where you replay the history of the Mobile industry by starting your own Mobile <br>
      development company in the 90s. Create best selling Mobiles. Research new technologies and invent new Mobile types. Become the leader of <br>
      the market and gain worldwide fans.<br>
    </p>

  </div>

  <div class="game_start">
    <h3>Start out in the 90s</h3>
    <p style="font-size:15px;">
      Start your adventure in a small garage office in the 90s. Enjoy the hand-crafted level design while you develop your first simple mobile device. Gain <br>
      experience, unlock new options and create your first Mobile Phone.<br>
    </p>
    <img src="img_gif/img1.gif" alt="img" style="text-align:center; overflow:auto; width:100%;height:500px;">
  </div>

  <!--game_create-->
  <div class="game_create" style="grid-column: 2/37;">
    <img class="img-thumbnail" src="img_gif/giphy (4).gif" alt="pic" style="width: 100%; height:270px; overflow: hidden;">
  </div>
  <h3 class="game_create" style="grid-row: 59/70; grid-column: 40/82;">
    Create Mobiles your way
    <p>
      <br>In MCM the decisions you make during development really matter. <br>
      Decide which areas you want to focus on. Does your mobile need more<br>
      feturs or should you focus more on quests? These decisions will have a<br>
      major impact on the success of your mobiles.<br>
    </p>
  </h3>
  <!--!!!-->

  <!--game_expand-->
  <h3 class="game_expand" style="grid-column: 2/45;">
    Expand your company
    <p>
      <br>Once you have successfully released a few mobiles you can move into your own <br>
      office and forge a world-class development team. Hire staff, train them and <br>
      unlock new options.<br>
    </p>
  </h3>
  <div class="game_expand" style="grid-column: 46/82;">
    <img class="img-thumbnail" src="img_gif/dribbble.gif" alt="pic" style="width: 100%; height:230px; overflow: hidden;">
  </div>
  <!--!!!-->

  <!--game_large-->
  <div class="game_large" style="grid-column: 2/37;">
    <img class="img-thumbnail" src="img_gif/left_side.gif" alt="pic" style="width: 100%; height: 100%; overflow: hidden;">
  </div>
  <h3 class="game_large" style="grid-column: 40/82;">
    Make larger, more complex Mobiles
    <p>
      <br>With experience and a good team, you can release larger, more complex  <br>
      Mobiles. Larger feturs bring new challenges and you will have to manage your <br>
      team well to deliver hit mobiles.<br>
    </p>
  </h3>
  <!--!!!-->

  <div class="game_unlock">
    <h3>Unlock labs and conduct industry-changing projects</h3>
    <p>Move beyond just releasing mobiles and conduct industry-changing projects by unlocking labs later in the game. There are a number of secret<br>
      projects that can be completed.<br>
    </p>
    <img src="img_gif/Online-Marketing-min.gif" alt="Lab image" style="grid-row: 96/117; width: 100%; height: 500px; ">

  </div>


  <!--game_rev-->
  <h3 class="game_rev" style="grid-column: 40/82;">
    Gameplay over revenue
    <div class="game_rev" style="padding-top:10px; overflow: warp;">
      <p>We love simulation games and we also strongly believe that games need to be more than dressed up slot machines. That’s why we are proud to say that MCM was designed as a fun game and not as a revenue extraction platform. MCM focuses on a casual multy player experience – there are no forced wait-times, no virtual coins, no in-app purchases, no ad-breaks, no loot boxes and no overly addictive gameplay mechanics. We don’t care about player retention or average player revenue, nor do we want to catch whales. All we care is that you enjoy the game for as long as you want to. In exchange, we ask for a small upfront fee because your support is the only factor keeping us in business. If you like what we are doing and want to support us further, please take a look at this page.

      </p>
    </div>
  </h3>
  <div class="game_rev" style="grid-column: 2/34;">
    <img class="img-thumbnail" src="img_gif/animacia.gif.pagespeed.ce.AgiJtodlSp.gif" alt="pic" style="width: 100%; height:230px; overflow: hidden;">
  </div>
  <!--!!!-->

  <div class="game_faq" style="text-align:center;">
    <h2 ><span>FAQ</span></h2>
    <div style="color: red; font-weight: bold;" >Do I need to be online while playing the game?</div>
    <div >No, you can play the game offline.<br><br></div>
    <div style="color: red; font-weight: bold;">If I buy on mobile do I get the Desktop version or vice versa?<br></div>
    <div >No, the mobile and Desktop versions are two separate products.</div>
    <div style="color: red; font-weight: bold;"><br>Will I get a Steam key?<br></div>
    <div >If you buy the Desktop version: Yes, you will receive a Steam key.</div>
    <div style="color: red; font-weight: bold;"><br>Will you port the game to more devices?</div>
    <div >If our mobile release goes well, we might consider porting the game to more devices.</div>
  </div>
  <div class="game_question" style="text-align:center;">
    <h3><span>Game questions</span></h3>
    <div style="color: red; font-weight: bold;">Where is the research menu in the second office?</div>
    <div >Once you are in the second office you have two menus. One, when you click on the background and another one when you click on a specific character. To research something you have to click on a character.</div>
    <div style="color: red; font-weight: bold;"><br>I always go bankrupt in the second office. Help!</div>
    <div >For some tips on how to survive the second office see <a href="#">here</a> (spoilers!).</div>
    <div style="color: red; font-weight: bold;"><br>Can I play longer than 35 years?</div>
    <div >Yes, once the normal game time is up, your score is calculated and there will be no more platform releases but you can still continue to play and unlock things.
      <p>If you prefer a longer/shorter game then you can also customize the game length. To do this click on the little cog icon on the screen where you enter your company name. This setting cannot be changed for existing save-games.</p></div>
    </div>
    <div class="game_comment">

    </div>
    <div class="game_footer">

    </div>
  </body>
  </html>
