<?php
include 'config.php';

if ($displayErrors == false)
  error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:title" content="<?php
  echo $falloutServerName;
  ?>">
  <meta property="og:type" content="website" />
  <meta name="title" content="<?php
  echo $falloutServerName;
  ?>" />
  <meta name="author" content="valsan-azerty-boi" />
  <title>
    <?php
    echo $falloutServerName;
    ?> - FOnline
  </title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/flexslider.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
  <link href="css/queries.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
  <link rel="manifest" href="manifest.json" />
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </script>
</head>

<body id="top">
  <header id="home">
    <section class="hero" id="hero">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-center inner">
            <h1 class="animated fadeInDown">
              <?php
              echo $falloutServerName;
              ?> - FOnline
            </h1>
            <p class="animated fadeInUp delay-05s">Fallout 2 online private server</p>
            <?php
            if ($pingServerFeatureIsActive == true) {
              echo '<p class="animated fadeInUp delay-1s">Status: ';
              try {
                if (fsockopen($falloutServerAdress, $falloutServerPort, $errCode, $errStr, 1)) {
                  echo '<img src="img/status-online.png" height="30" alt="Online" />';
                } else {
                  echo '<img src="img/status-offline.png" height="30" alt="Offline" />';
                }
              } catch (Exception $e) {
                echo '<img src="img/status-unknown.png" height="30" alt="Unknown" />';
              }
              echo '</p>';
            }
            ?>
          </div>
        </div>
        <div class="row">
        </div>
      </div>
      <br />
    </section>
  </header>
  <div class="ignite-cta text-center">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Click on the button below</p>
          <?php echo '<a href="' . $downloadClientLocationUri . '" target="_blank" class="ignite-btn">Download client</a>'; ?>
          <p>You need this to play !</p>
        </div>
      </div>
    </div>
  </div>
  <section class="portfolio text-center hero2p section-padding" id="portfolio">
    <div class="container">
      <div class="row">
        <div id="portfolioSlider">
          <ul class="slides">
            <li>
              <div class="col-md-4 wp4">
                <h2>Before Fallout 2</h2>
                <p>A complete new story 3 years before the solo game.</p>
              </div>
              <div class="col-md-4 wp4 delay-05s">
                <h2>Online multiplayer</h2>
                <p>Play with your friends or against them.</p>
              </div>
              <div class="col-md-4 wp4 delay-1s">
                <h2>New experience</h2>
                <p>A total different game with an enhanced ui and new content.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <ul class="legals">
            <li>Thanks to</li>
          </ul>
          <ul class="legals">
            <li><a href="https://github.com/cvet">cvet</a></li>
            <li><a href="https://github.com/rotators">rotators</a></li>
            <li><a href="https://fodev.net/">fodev.net</a></li>
            <li><a href="https://www.fonline-reloaded.net/">fonline-reloaded.net</a></li>
          </ul>
        </div>
        <div class="col-md-6 credit">
          <p>
            <?php
            echo $falloutServerName;
            ?> © <span id="year">2013</span>
          </p>
          <p><a href="../">Return to website home</a></p>
        </div>
      </div>
    </div>
  </footer>
  <script src="js/jquery.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
  <script src="js/jquery.flexslider.js"></script>
  <script src="js/modernizr.js"></script>
  <?php
  if ($audioBackgroundFeatureIsActive == true) {
    echo '<audio src="audio/audio.mp3" type="audio/mp3" volume="0.1" autoplay></audio>';
  }
  ?>
</body>

</html>