<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  require_once('includes/init.php');

  if(isset($_GET['filter'])) {
    $tbl1 = "tbl_images";
    $filter = $_GET['filter'];
    $getProducts = filterType($tbl, $filter);
  }else{
    $tbl = "tbl_images";
    $getImages = getImage($tbl);
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Chantry Island | Gallery</title>

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
            <li><a href="restoration.php" class="link">Restoration</a></li>
            <li><a href="booking.php" class="link">Booking</a></li>
            <li><a href="contact.php" class="link">Contact</a></li>
            <li><a href="" id="active" class="link">Gallery</a></li>
            <li><a href="donations.php" class="link">Donations</a></li>
          </ul>
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
        <img src="img/topImg6.jpg" alt="" class="img-responsive">
        <object data="img/logo.svg" type="image/svg+xml" id="logo"></object>
      </div>
    </section>

    <section class="container-fluid">
    <h1 class="hidden">Gallery</h1>
        <?php
          if(!is_string($getImages)) {
            while($row = mysqli_fetch_array($getImages)) {
              echo "<div class=\"col-xs-3\">
                        <img class=\"img-responsive imgSmall\"src=\"img/{$row['images_id']}\">
                    </div>";
            }
          }else{
            echo "<p>{$getImages}</p>";
          }
        ?>
    </section>

    <div class="modal fade" id="myModal" role="dialog" tabindex="-1">
      <div class="modal-dialog" id="dialog">
        <div class="modal-content">

          <div class="modal-body">
          </div>

          <div class="modal-footer">
            <?php echo "<p>{$row['images_photographer']}</p>" ?>
            <button class="btn btn-default" id="button" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/galleryScript.js"></script>
  </body>
</html>