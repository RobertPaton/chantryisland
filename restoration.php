<?php
  require_once('includes/init.php');
  
  ini_set('display_errors',1);
  error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Chantry Island | Restoration</title>

    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <h1 class="hidden">Body</h1>
  	<nav class="navbar navbar-default" id="nav1">
    <h1 class="hidden">Navigation</h1>
  		<div class="container-fluid" id="nav">	
  			<div class="collapse navbar-collapse">
  				<ul class="nav navbar-nav" id="nav">
  					<li><a href="index.php" class="link">Home</a></li>
  					<li><a href="about.php" class="link">About</a></li>
            <li><a href="#" id="active" class="link">Restoration</a></li>
  					<li><a href="booking.php" class="link">Booking</a></li>
  					<li><a href="contact.php" class="link">Contact</a></li>
            <li><a href="gallery.php" class="link">Gallery</a></li>
            <li><a href="donations.php" class="link">Donations</a></li>
  				</ul>
  			</div>

      <button type="button" class="navbar-toggle collpased" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
  		</div>
  	</nav>

    <section class="container-fluid" id="sectionTop">
    <h1 class="hidden">Header</h1>
      <div class="col-lg-12" id="imgTop">
        <img src="img/topImg3.jpg" alt="" class="img-responsive">
        <object data="img/logo.svg" type="image/svg+xml" id="logo"></object>
      </div>
    </section>

    <section class="container-fluid">
    <h1 class="hidden">Video</h1>
      <div class="col-xs-6 col-xs-offset-3">
          <video class="img-responsive" id="video" controls>
            <source src="video/chantryisland.mp4">
          </video>
      </div>
    </section>

    <section class="container-fluid">
      <div class="col-xs-8 col-xs-offset-2 lighthouseRestore">
      <h1>Light Keeper's Cottage Before Restoration</h1>
      <p>For almost 100 years (1859 – 1954), light keepers lived on the island to keep the light burning for mariners on the lake. When the lighthouse lamp was converted to electricity in 1954, a light keeper was no longer needed. The buildings were left neglected and suffered at the hands of vandals. The lighthouse still stood intact, but little was left of the light keeper’s quarters. The roof had fallen in and the walls and floors had crumbled into a pile of rubble in the basement.<br><br>
      In 1997 the local Marine Heritage Society established specific goals for the island's restoration. The project was to be funded by donations and fundraising efforts, and the majority of the work was to be done by volunteers.<br><br>
      With permission from 5 levels of government, the group of volunteers began to rebuild the light keeper’s cottage, using the original structure plans.</p>
      </div>

      <div class="col-xs-8 col-xs-offset-2 lighthouseRestore">
        <h1 class="lighthouseRestore">Light Keeper's Cottage and Grounds After Restoration</h1>
        <p>The Light Keeper's Cottage restoration was completed in 2001. Over 250 volunteers put in more than 300,000 hours of labor to finish the restoration and ready the boat for tours. Since 2001 volunteers have restored the staircase of the lighthouse, built a boathouse on the island, constructed a replica of the original boat (which sits in the boathouse) and reconstructed the privy.
Today the tour is operated with over 125 volunteers, whose jobs include island housekeepers, gardeners, tour boat captains, crew and tour guides, and gift shop sales and service personnel. Volunteers also install the portable walkways and docks every spring and remove them every fall. To date, there have been over 12,000 visitors to the island.</p>
      </div>
    </section>

    <footer class="navbar navbar-default" id="footer">
    <h1 class="hidden">Footer</h1>
    <div class="container-fluid">
      <h4>Extra Links</h4>
      <ul class="nav navbar-nav">
        <li><a target="_blank" href="http://www.saugeenshores.ca/en/index.asp">Saugeen Shores</a></li>
        <li><a target="_blank" href="http://www.brucemuseum.ca/">Bruce County Museum and Culture Centre</a></li>
        <li><a target="_blank" href="http://www.brucecoastlighthouses.com/">Bruce Coast Lighthouse Tour</a></li>
        <li><a target="_blank" href="http://explorethebruce.com/">Explore the Bruce</a></li>
        <li><a target="_blank" href="http://www.southamptontennisclub.ca/">southampton Tennis Club</a></li>
        <li><a target="_blank" href="cmsLogin.php">Admin Login</a></li>
      </ul>
      </div>
    </footer>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>