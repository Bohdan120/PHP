<?php
  include 'FootballData.php';
  $api = new FootballData(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Premier League</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap/bootstrap.css">


  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css"> 

  <link rel="stylesheet" href="carousel/owl.carousel.min.css">  
  <link rel="stylesheet" href="carousel/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4" role="banner">

      <div class="container">
        <div class="d-flex align-items-center">
          <div class="site-logo">
            <a href="index.php">
              <img src="images/logo.png" alt="Logo">
            </a>
          </div>
          <div class="ml-auto">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php" class="nav-link">Home</a></li>             
                <li class="active"><a href="players.php" class="nav-link">Players</a></li>
                <li><a href="blog.php" class="nav-link">Blog</a></li>
                <li><a href="admin.php" class="nav-link">Admin</a></li>
              </ul>
            </nav>

            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right text-white"><span
                class="icon-menu h3 text-white"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mx-auto text-center">
            <h1 class="text-white">Players</h1>
            <p>of teams whose match is displayed on the main page</p>
          </div>
        </div>
      </div>
    </div>  
    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-6 title-section">
            <?php
              $away_id = $_COOKIE['away_team_id'];
              $away_team = $api->findTeamById($away_id);
            ?>
            <h2 class="heading"> <strong><?php echo $away_team->name?> </strong></h2>
          </div>
          <div class="col-6 text-right">
            <div class="custom-nav">
            <a href="#" class="js-custom-prev-v2" id="left_away"><span class="icon-keyboard_arrow_left"></span></a>
            <span></span>
            <a href="#" class="js-custom-next-v2" id="right_away"><span class="icon-keyboard_arrow_right"></span></a>
            </div>
          </div>
        </div>
  

      <div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="owl-4-slider owl-carousel" id="owl-away">
              <?php foreach ($away_team->squad as $player) {
              ?>
                <div class="item">
                  <div class="player-info">
                    <h5><?php echo $player->name; ?></h5>
                    <p><strong>Position:</strong> <?php echo $player->position; ?></p>
                    <p><strong>Date of Birth:</strong> <?php echo $player->dateOfBirth; ?></p>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>  
    </div>
    </div>

    <div>
      <div class="container">
        <div class="row">
          <div class="col-6 title-section">
          <?php
              $home_id = $_COOKIE['home_team_id'];
              $home_team = $api->findTeamById($home_id);
            ?>
            <h2 class="heading"><strong> <?php echo $home_team->name?> </strong></h2>
          </div>
          <div class="col-6 text-right">
            <div class="custom-nav">
            <a href="#" class="js-custom-prev-v2" id="left_home"><span class="icon-keyboard_arrow_left"></span></a>
            <span></span>
            <a href="#" class="js-custom-next-v2" id="right_home"><span class="icon-keyboard_arrow_right"></span></a>
            </div>
          </div>
        </div>
  

      <div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="owl-4-slider owl-carousel" id="owl-home">
              <?php foreach ($home_team->squad as $player) {
              ?>
                <div class="item">
                  <div class="player-info">
                    <h5><?php echo $player->name; ?></h5>
                    <p><strong>Position:</strong> <?php echo $player->position; ?></p>
                    <p><strong>Date of Birth:</strong> <?php echo $player->dateOfBirth; ?></p>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </div>  
    </div>
    </div>


    <footer class="footer-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>News</h3>
              <ul class="list-unstyled links">
                <li><a href="#">All</a></li>
                <li><a href="#">Club News</a></li>
                <li><a href="#">Media Center</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">RSS</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Tickets</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Online Ticket</a></li>
                <li><a href="#">Payment and Prices</a></li>
                <li><a href="#">Contact &amp; Booking</a></li>
                <li><a href="#">Tickets</a></li>
                <li><a href="#">Coupon</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Matches</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Standings</a></li>
                <li><a href="#">World Cup</a></li>
                <li><a href="#">La Lega</a></li>
                <li><a href="#">Hyper Cup</a></li>
                <li><a href="#">World League</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-3">
            <div class="widget mb-3">
              <h3>Social</h3>
              <ul class="list-unstyled links">
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Youtube</a></li>
              </ul>
            </div>
          </div>

        </div>

       
      </div>
    </footer>



  </div>




  <script src="carousel/jquery.min.js"></script>
  <script src="carousel/owl.carousel.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
 






</body>

</html>
