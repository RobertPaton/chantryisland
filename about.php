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
    <title>Chantry Island | About</title>

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
  					<li><a href="#" id="active" class="link">About</a></li>
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
        <img src="img/topImg2.jpg" alt="" class="img-responsive">
        <object data="img/logo.svg" type="image/svg+xml" id="logo"></object>
      </div>
    </section>

    <section class="container-fluid" id="middle">
    <h1 class="hidden">Learn More</h1>
        <div class="col-lg-2 col-lg-offset-2">
          <button class="middleHeader" id="about">About</button>
        </div>
        
        <div class="col-lg-2 col-lg-offset-1">
          <button class="middleHeader" id="news">News</button>
        </div>
        
         <div class="col-lg-2 col-lg-offset-1">
          <button class="middleHeader" id="events">Events</button>
        </div>
    </section>

    <section class="container-fluid">
      <div id="aboutText">
      <h1 class="hidden">About</h1>
        <div class="col-lg-2 col-lg-offset-2">
          <input type="image" src="img/island.svg" id="island">
        </div>

        <div class="col-lg-2 col-lg-offset-1">
          <input type="image" src="img/lighthouse.svg" id="lighthouse">
        </div>

        <div class="col-lg-2 col-lg-offset-1">
          <input type="image" src="img/bird.svg" id="bird">
        </div>

        <div class="col-lg-8 col-lg-offset-2" id="middleText">
        <p id="islandText">Chantry Island is a glacial moraine and consists of stone above the water and beneath extending a mile north and a mile south of the island. These underwater shoals of massive granite boulders have made this area one of the most treacherous in the Great Lakes. There are over 50 known shipwrecks around the island and there are many accounts from the 1800’s and early – mid 1900’s of these disasters and lost lives. Today, buoys and modern navigational tools safely guide boats through the area.The island varies in size depending on the level of Lake Huron. Today, with a low lake level Chantry Island is about 68 acres. In 1986 when the water level was at the highest of the century, the island was only about 10 acres, causing trees on the west, north and south sides to drown.</p>

        <p id="lighthouseText">During the mid 1800’s water traffic on the Great Lakes had substantially increased and the colonial government called for improved navigational tools for the mariners on the Lake Huron. John Brown of Thorold was contracted to build the lighthouse on Chantry Island, as well as 10 other lighthouses to help sailors navigate the Lake. Because of the expense and difficulty of building, only six were completed. The Chantry Island Lighthouse was one of these completed and it was lit on April 1, 1859.The lighthouse stands 86 ft. above water level and is 80 ft. high from its base to the light’s center. The lantern room of the lighthouse was fitted with a Fresnel lens built and transported from Paris, France. The first fuel used was sperm whale oil and the first light was a fixed light, not the familiar flashing one. Other fuels used have been colza oil, coal oil, kerosene, acetylene and electricity. Its present-day flashing light is solar powered.</p>

        <p id="birdText">In 1957 the Canadian Wildlife Service declared Chantry Island a Federal Migratory Bird Sanctuary to protect the migratory and nesting birds of the island. It is the largest Federal Migratory Bird Sanctuary between James Bay and Point Pelee. There are approximately fifty thousand birds (including chicks) on the island during the breeding season. It is home to nesting colonies of Great Blue Heron, Great Egret, Black-crowned Night-Heron, Herring Gull, Ring-billed Gull and Double-crested Cormorant. Water fowl such as Mallard, American Black Duck, Gadwall, Blue-winged Teal, Green-winged Teal, Northern Pintail, and American Wigeon are also known nesters on the island. Because the island is a migratory bird sanctuary, the number of people on the island on any given day is strictly limited and tours must be booked through the Chantry Island Tour Base.</p>
        </div>
      </div>

      <div class="col-lg-8 col-lg-offset-2" id="newsBody">
      <h1 class="hidden">News</h1>
        <?php
            $tbl ="tbl_news";
            $news = getNews($tbl);

            while($row = mysqli_fetch_array($news)){
              echo "<div class=\"newsDiv\">
                    <h1>{$row['news_title']}</h1>
                    <p>{$row['news_body']}</p>
                    <p>{$row['news_date']}</p>
                    </div>";
            }
        ?>
      </div>

      <div class="col-lg-8 col-lg-offset-2" id="eventsBody">
      <h1 class="hidden">Events</h1>
        <?php
          $tbl = "tbl_events";
          $events = getEvents($tbl);

          while($row = mysqli_fetch_array($events)){
            echo "<h1>{$row['events_title']}</h1>
                  <p>{$row['events_body']}</p>
                  <p>{$row['events_date']}</p>";
          }
        ?>
      </div>

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
    <script src="js/aboutScript.js"></script>
  </body>
</html>