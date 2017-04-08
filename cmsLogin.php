<?php
	ini_set('display_errors', 1);
	error_reporting(0);
	$ip = $_SERVER["REMOTE_ADDR"];

	require_once("includes/init.php");

	if(isset($_POST['submit'])) {
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);

		if($username != "" && $password != "") {
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "please fill in the required fields.";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Chantry Island | Login</title>

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

  <section class="container-fluid col-lg-4 col-lg-offset-4">
  	<h1 id="loginTitle">Login to your account</h1>
  	<?php if(!empty($message)) {echo $message;} ?>

  	<form action="cmsLogin.php" method="post">
  		<div class="form-group">
  			<input type="text" placeholder="Username" name="username" class="form-control" id="inputUsername">
  		</div>

  		<div class="form-group">
  			<input type="password" name="password" placeholder="Password" class="form-control" id="inputPassword">
  		</div>

  		<button type="submit" name="submit" value="Go!" class="btn btn-default" id="loginButton">Submit</button>
  	</form>
  </section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>