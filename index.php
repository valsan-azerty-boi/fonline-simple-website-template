<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>server170984 - FOnline</title>
	<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="https://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="css/flexslider.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/queries.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
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
            <h1 class="animated fadeInDown">server170984 - FOnline</h1>
            <p class="animated fadeInUp delay-05s">Fallout 2 online private server</p>
			<p class="animated fadeInUp delay-1s">Status: <?php 
if($fp = fsockopen($_SERVER['SERVER_ADDR'],4040,$errCode,$errStr,1)){   
	echo '<img src="img/online.png" height="30" alt="Online" />';
} else {
	echo '<img src="img/offline.png" height="30" alt="Offline" />';
} 
fclose($fp);
			?></p>
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
          <a href="dl/FOnlineClient.zip" class="ignite-btn">Download client</a>
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
          <p>server170984 © <span id="year">2022</span></p>
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
  <audio src="audio/audio.mp3" type="audio/mp3" volume="0.1" autoplay></audio>
</body>
</html>