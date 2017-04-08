<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Chantry Island | Homepage</title>

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
  		<div class="container-fluid">	
  			<div class="collapse navbar-collapse"  id="nav">
  				<ul class="nav navbar-nav" id="nav">
  					<li><a href="#" id="active" class="link">Home</a></li>
  					<li><a href="about.php" class="link">About</a></li>
            <li><a href="restoration.php" class="link">Restoration</a></li>
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
        <img src="img/topImg.jpg" alt="" class="img-responsive">
        <object data="img/logo.svg" type="image/svg+xml" id="logo"></object>
      </div>
    </section>

    <section class="container-fluid hidden-sm hidden-xs" id="middle">
    <h1 class="hidden">Intro</h1>
        <div class="col-lg-3 col-lg-offset-2">
          <button class="middleHeader" id="heritage">Marine Heritage Society</button>
        </div>

        <div class="col-lg-3 col-lg-offset-2" id="headerRight">
          <button class="middleHeader" id="touring">Touring Chantry Island</button>
        </div>

        <div class="col-lg-8 col-lg-offset-2" id="middleText">
          <p id="marineText">The Marine Heritage Society is a not-for-profit group of volunteers dedicated to the preservation and enhancement of our community's marine history. The goal of the Society is to identify, preserve and restore material items of marine historical significance and to raise sufficient funds to support these endeavors. Among other projects, the Society manages the Chantry Island Light Station under agreements and restrictions from the Canadian Coast Guard and the Canadian Wildlife Service.</p>

          <p id="touringText">As you take the 15 minute boat ride to the island you will enjoy the outstanding views of the sandy beach shoreline and the deep blue waters of Lake Huron. During your two hour guided visit on Chantry Island, you have the opportunity to climb to the top of the Imperial Lighthouse for extraordinary views of the island. Stroll back in time while visiting the Light Keeper's Cottage as it existed in the late 1800’s, decorated with period furnishings from private donors and the Bruce County Museum and Cultural Centre. You will also see the surrounding gardens and many species of birds.</p>
        </div>
    </section>

    <section class="container-fluid hidden-lg hidden-md" id="smallMiddle">
      <div class="col-lg-12">
        <h2>Marine Heritage Scociety</h2>
        <p>The Marine Heritage Society is a not-for-profit group of volunteers dedicated to the preservation and enhancement of our community's marine history. The goal of the Society is to identify, preserve and restore material items of marine historical significance and to raise sufficient funds to support these endeavors. Among other projects, the Society manages the Chantry Island Light Station under agreements and restrictions from the Canadian Coast Guard and the Canadian Wildlife Service.</p>
      </div>

      <div class="col-lg-12">
        <h2>Touring Chantry Island</h2>
        <p>As you take the 15 minute boat ride to the island you will enjoy the outstanding views of the sandy beach shoreline and the deep blue waters of Lake Huron. During your two hour guided visit on Chantry Island, you have the opportunity to climb to the top of the Imperial Lighthouse for extraordinary views of the island. Stroll back in time while visiting the Light Keeper's Cottage as it existed in the late 1800’s, decorated with period furnishings from private donors and the Bruce County Museum and Cultural Centre. You will also see the surrounding gardens and many species of birds.</p>
      </div>
    </section>

    <section class="container-fluid imgButtons">
    <h1 class="hidden">Bottom Links</h1>
      <div class="col-lg-4 imgContainer">
        <img src="img/shore.jpg" alt="Shoreline" class="img-responsive imgBottom">
        <form action="about.php">
          <input type="submit" value="About" class="btn btn-default button">
        </form>
      </div>

      <div class="col-lg-4 imgContainer">
        <img src="img/lighthouse.jpg" alt="Lighthouse" class="img-responsive imgBottom">
        <form action="booking.php">
          <input type="submit" value="Book Now" class="btn btn-default button">
        </form>
      </div>
      
      <div class="col-lg-4 imgContainer">
        <img src="img/sunset.jpg" alt="Sunset" class="img-responsive imgBody imgBottom">
        <form action="contact.php">
          <input type="submit" value="Contact" class="btn btn-default button">
        </form>
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
    <script src="js/main.js"></script>
  </body>
</html>