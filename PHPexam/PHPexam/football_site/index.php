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
  <link rel="stylesheet" href="css/owl.carousel.min.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">


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
                <li class="active"><a href="index.php" class="nav-link">Home</a></li>                
                <li><a href="players.php" class="nav-link">Players</a></li>
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
          <div class="col-lg-10 ml-auto">
            <h1 class="text-white">All about Premier League</h1>            
          </div>
        </div>
      </div>
    </div>
    

    
    
    <div class="container">

      
      
      <div class="row">
        <div class="col-lg-12">          
        <?php
$matchesData = $api->findMatchesByCompetition(2021);

if ($matchesData) {
    $lastMatch = null;
    $nextMatch = null;
    $scheduledMatch = null;
    $homeTeamId = null;
    $awayTeamId = null;

    foreach ($matchesData->matches as $match) {
        if ($match->status === 'FINISHED') {
            $lastMatch = $match;
        } elseif ($match->status === 'TIMED') {
            $nextMatch = $match;
        } elseif ($match->status === 'SCHEDULED' && $scheduledMatch === null) {
            $scheduledMatch = $match;
        }
    }

    if ($lastMatch !== null) {
        $homeTeamName = $lastMatch->homeTeam->name;
        $awayTeamName = $lastMatch->awayTeam->name;
        $homeTeamCrestUrl = $lastMatch->homeTeam->crest;
        $awayTeamCrestUrl = $lastMatch->awayTeam->crest;
        $homeTeamId = $match->homeTeam->id;
        $awayTeamId = $match->awayTeam->id;
        $score = $lastMatch->score->fullTime->home . '-' . $lastMatch->score->fullTime->away;
        $matchType = "The last match that ended";
    } elseif ($nextMatch !== null) {
        $homeTeamName = $nextMatch->homeTeam->name;
        $awayTeamName = $nextMatch->awayTeam->name;
        $homeTeamCrestUrl = $nextMatch->homeTeam->crest;
        $awayTeamCrestUrl = $nextMatch->awayTeam->crest;
        $homeTeamId = $match->homeTeam->id;
        $awayTeamId = $match->awayTeam->id;
        $score = "-";
        $matchType = "Next match";
    } elseif ($scheduledMatch !== null) {
        $homeTeamName = $scheduledMatch->homeTeam->name;
        $awayTeamName = $scheduledMatch->awayTeam->name;
        $homeTeamCrestUrl = $scheduledMatch->homeTeam->crest;
        $awayTeamCrestUrl = $scheduledMatch->awayTeam->crest;
        $homeTeamId = $match->homeTeam->id;
        $awayTeamId = $match->awayTeam->id;
        $score = "-";
        $matchType = "The next scheduled match";
    }

    // Встановлення cookie з ID команди
    if ($homeTeamId !== null && $awayTeamId !== null) {
        setcookie('home_team_id', $homeTeamId, time() + (86400 * 30), "/"); 
        setcookie('away_team_id', $awayTeamId, time() + (86400 * 30), "/"); 
    }
}
?>

          <div class="d-flex team-vs">
              <span class="match-type"><?php echo $matchType ?></span>
              <span class="score"><?php echo $score; ?></span>
              <div class="team-1 w-50">
                  <div class="team-details w-100 text-center">
                      <img src="<?php echo $homeTeamCrestUrl; ?>" alt="<?php echo $homeTeamName; ?>" class="img-fluid">
                      <h3><?php echo $homeTeamName; ?></h3>
                  </div>
              </div>
              <div class="team-2 w-50">
                  <div class="team-details w-100 text-center">
                      <img src="<?php echo $awayTeamCrestUrl; ?>" alt="<?php echo $awayTeamName; ?>" class="img-fluid">
                      <h3><?php echo $awayTeamName; ?></h3>
                  </div>
              </div>
          </div>        
        </div>
      </div>
    </div>


   
    
    <div class="site-section bg-dark">
      <div class="container">
          <div class="row">
              <div class="col-lg-6">
                  <div class="widget-next-match">
                      <div class="widget-title">
                          <h3 class="title is-4">Matches for the 2nd matchday of the Premiere League</h3>
                      </div>
                      <div class="widget-body mb-3">
                          <table class="table is-striped is-narrow custom-table">
                              <tr>
                                  <th>HomeTeam</th>
                                  <th></th>
                                  <th>AwayTeam</th>
                                  <th colspan="3">Result</th>
                              </tr>
                              <?php foreach ($api->findMatchesByCompetitionAndMatchday(2021, 2)->matches as $match) { ?>
                                  <tr>
                                      <td><strong class="text-white"><?php echo $match->homeTeam->name; ?></strong></td>
                                      <td>-</td>
                                      <td><strong class="text-white"><?php echo $match->awayTeam->name; ?></strong></td>
                                      <td><?php echo $match->score->fullTime->home; ?></td>
                                      <td>:</td>
                                      <td><?php echo $match->score->fullTime->away; ?></td>
                                  </tr>
                              <?php } ?>
                          </table>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="widget-next-match">
                      <div class="widget-title">
                          <h3 class="title is-4">Current standing of the Premier League</h3>
                      </div>
                      <div class="widget-body mb-3">
                          <table class="table is-striped is-narrow custom-table">
                              <tr>
                                  <th>Position</th>
                                  <th>TeamName</th>
                                  <th>GoalDifference</th>
                                  <th>Points</th>
                              </tr>
                              <?php 
                              $counter = 0; // Counter to track the number of positions shown
                              foreach ($api->findStandingsByCompetition("PL")->standings as $standing) {
                                  if ($standing->type == 'TOTAL') {
                                      foreach ($standing->table as $standingRow) {
                                          $counter++;
                              ?>
                                          <tr>
                                              <td><?php echo $standingRow->position; ?></td>
                                              <td><strong class="text-white"><?php echo $standingRow->team->name; ?></strong></td>
                                                <td><?php echo $standingRow->goalDifference; ?></td>
                                                <td><?php echo $standingRow->points; ?></td>
                                            </tr>
                                <?php 
                                            if ($counter >= 10) { 
                                                break 2; 
                                            }
                                        }
                                    }
                                }
                                ?>
                              <tr>
                              </tr>
                          </table>
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

  <script src="js/bootstrap.min.js"></script>

</body>

</html>


