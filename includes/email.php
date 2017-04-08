<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$to = 'robert.a.paton@gmail.com';
	$subject = 'Hello';
	$header = "From .". $name . " <" . $email . "\r\n";

	mail($to, $subject, $message $header);
	echo "Your MEssage has been sent.";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Chantry Island | Contact</title>

    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  	<nav class="navbar navbar-default" id="nav1">
  		<div class="container-fluid" id="nav">	
  			<div class="collapse navbar-collapse">
  				<ul class="nav navbar-nav" id="nav">
  					<li><a href="../index.php" class="link">Home</a></li>
  					<li><a href="../about.php" class="link">About</a></li>
            <li><a href="../restoration.php" class="link">Restoration</a></li>
  					<li><a href="../booking.php" class="link">Booking</a></li>
  					<li><a href="#" id="active" class="link">Contact</a></li>
  					<li><a href="../gallery.php" class="link">Gallery</a></li>
            <li><a href="../donations.php" class="link">Donations</a></li>
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
      <div class="col-lg-12" id="imgTop">
        <img src="../img/topImg5.jpg" alt="" class="img-responsive">
        <object data="../img/logo.svg" type="image/svg+xml" id="logo"></object>
      </div>
    </section>

    <section class="container-fluid">

    <h1 id="contact">Contact</h1>

    <div class="col-xs-5 col-xs-offset-1">
    <h3>To: Chantry Island</h1>
      <form method="post" role="form" action="includes/email.php">

        <div class="form-group">
          <label for="InputName">Name</label>
          <input type="text" name="name" class="form-control" id="inputName" placeholder="Enter Name">
        </div>

        <div class="form-group">
          <label for="InputEmail">Email</label>
          <input type="text" name="email" class="form-control" id="inputEmail" placeholder="Enter Email">
        </div>

        <div class="form-group">
          <label for="InputSubject">Subject</label>
          <input type="text" name="subject" class="form-control" id="inputSubject" placeholder="Enter Subject">
        </div>

        <div class="form-group">
          <label for="InputText">Message</label>
          <textarea name="message" id="inputText" type="text" class="form-control" placeholder="Enter Message"></textarea>
        </div>
        <button name="submit" type="submit" class="btn btn-default" id="button">Send</button>

      </form>
    </div>

    <div class="col-xs-3 col-xs-offset-1" id="address">
      <h3>86 Saugeen St.<br>Southampton, Ontario<br>Canada N0H 2L0</h3>
      <h4>From Highway 21 in Southampton, turn west on Clarendon and follow the signs, or From High Street, (the main street), turn north on Huron or Grosvenor Street and look for the signs.</h4>
    </div>

      <div class="col-xs-8 col-xs-offset-2">
        <div id="map">
        </div>
      </div>
    </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 44.4999828, lng: -81.3731178},
          zoom: 15
        });
        var marker = new google.maps.Marker({
          position: {lat: 44.4999828, lng: -81.3731178},
          map: map
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkSxEF3csdTdPf_-uVH9izu8FnG5vodAA&callback=initMap" async defer></script>
  </body>
</html>