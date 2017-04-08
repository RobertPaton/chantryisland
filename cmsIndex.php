<?php
	require_once('includes/init.php');
	confirm_logged_in();
  
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
    <title>Chantry Island | CMS Home</title>

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

  <nav class="navbar navbar-default cmsNav">
    <div class="container-fluid">
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav navUl">
          <li><button class="cmsHeader" id="content">Content Settings</button></li>
          <li><button class="cmsHeader" id="user">User Settings</button></li>
          <li><a id="ulA" href="includes/caller.php?caller_id=logout">Sign out</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- CONTENT START -->
  <section class="container-fluid" id="contentBody">
    <div class="col-lg-6 col-lg-offset-3">

    <h2 class="contentHeader">What Would You Like To Add?</h2>

    <nav class="navbar navbar-default cmsNav">
      <div class="container-fluid">
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navUl">
            <li><button class="cmsHeader" id="image">Add Image</button></li>
            <li><button class="cmsHeader" id="news">Add News</button></li>
            <li><button class="cmsHeader" id="event">Add Event</button></li>
            <li><button class="cmsHeader" id="imageDel">Delete Image</button></li>
            <li><button class="cmsHeader" id="newsDel">Delete News</button></li>
            <li><button class="cmsHeader" id="eventDel">Delete Event</button></li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="addImages">
    <?php
      if(isset($_POST['submitImage'])) {
        $img = $_FILES['images_file']['name'];
        $name = $_POST['images_name'];
        $photographer = $_POST['images_photographer'];
        $uploadImage = addImage($img, $name, $photographer);
        $message = $uploadImage;
      }

      if(!empty($message)) {
        echo $message;
      }
    ?>
      <h1 class="contentHeader">What Image Do You Want To Add?</h1>
      <form action="cmsIndex.php" method="post" role="form" enctype="multipart/form-data">
        <label>Add Images</label><br>
        <input class="form-control" type="file" name="images_file"><br><br>
    
        <label>Image Name</label><br>
        <input class="form-control" type="text" name="images_name"><br><br>
    
        <label>Photographer</label><br>
        <input class="form-control" type="text" name="images_photographer">
        <br><br>
        <button name="submitImage" class="btn btn-default">Add Image</button>
      </form>
    </div>

    <div id="addNews">
    <?php
      if(isset($_POST['submitNews'])) {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $date = date("Y/m/d");
        $uploadNews = addNews($title, $body, $date);
        $message = $uploadNews;
      }
    ?>
      <h1 class="contentHeader">What News Do You Have For Today?</h1>
      <form action="cmsIndex.php" role="form" method="post" enctype="multipart/form-data">
        <label>Title</label><br>
        <input class="form-control" type="text" name="title"><br><br>
    
        <label>Body</label><br>
        <textarea class="form-control textarea" name="body"></textarea>
        <br><br>
        <button class="btn btn-default" name="submitNews">Add News</button>
      </form>
    </div>

    <div id="addEvent">
    <?php
      if(isset($_POST['submitEvent'])) {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $date = date("Y/m/d");
        $uploadNews = addEvent($title, $body, $date);
        $message = $uploadNews;
      }
    ?>
      <h1 class="contentHeader">What Event Do You Have For Today?</h1>
      <form action="cmsIndex.php" role="form" method="post" enctype="multipart/form-data">
        <label>Title</label><br>
        <input class="form-control" type="text" name="title"><br><br>
    
        <label>Body</label><br>
        <textarea class="form-control textarea" name="body"></textarea>
        <br><br>
        <button class="btn btn-default" name="submitEvent">Add News</button>
      </form>
    </div>

    <div id="deleteImage">
      <?php
        $tbl1 = "tbl_images";
        $images = getAll($tbl1);
      ?>
      <h1 class="contentHeader">What Image Do You Want To Delete?</h1>
      <?php
        while($row = mysqli_fetch_array($images)){
          echo "{$row['images_name']}<a href=\"includes/callerImage.php?caller_id=delete&id={$row['images_id']}\">Delete Image</a><br>";
        }
      ?>
    </div>

    <div id="deleteNews">
    <?php
      $tbl2 = "tbl_news";
      $news = getAll($tbl2);
    ?>
      <h1 class="contentHeader">What News Do You Want To Delete?</h1>
      <?php
        while($row = mysqli_fetch_array($news)){
          echo "{$row['news_title']}<a href=\"includes/callerNews.php?caller_id=delete&id={$row['news_id']}\">Delete News</a><br>";
        }
      ?>
    </div>

    <div id="deleteEvent">
    <?php
      $tbl3 = "tbl_events";
      $news = getAll($tbl3);
    ?>
      <h1 class="contentHeader">What Event Do You Want To Delete?</h1>
      <?php
        while($row = mysqli_fetch_array($news)){
          echo "{$row['events_title']}<a href=\"includes/callerNews.php?caller_id=delete&id={$row['events_id']}\">Delete News</a><br>";
        }
      ?>
    </div>
  </section>
  <!-- CONTENT END -->

  <!-- USER START -->
  <section class="container-fluid" id="userBody">
    <div class="col-lg-8 col-lg-offset-2">

      <h2 class="contentHeader">What would you like to change?</h2>

      <nav class="navbar navbar-default cmsNav">
        <div class="container-fluid">
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navUl">
              <li><button class="cmsHeader" id="add">Add User</button></li>
              <li><button class="cmsHeader" id="edit">Edit User</button></li>
              <li><button class="cmsHeader" id="delete">Delete User</button></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="contentHeader" id="addUser">
        <h1>Create a User</h1>
        <?php 
          if(isset($_POST['submit'])) {
            $fname = trim($_POST['fname']);
            $lname = trim($_POST['lname']);
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            $email = trim($_POST['email']);
            $level = $_POST['lvlList'];
            if(empty($level)) {
              $message = "Please Select a User Level.";
            }else{
              $result = createUser($fname, $lname, $username, $password, $email, $level);
              $message = $result;
            }
          }

          if(!empty($message)){echo $message;} 
        ?>

        <form action="cmsIndex.php" role="form" method="post">
          <label>First Name</label>
          <input class="form-control" type="text" name="fname" value="<?php if(!empty($fname)){echo $fname;} ?>">

          <label>Last Name</label>
          <input class="form-control" type="text" name="lname" value="<?php if(!empty($lname)){echo $lname;} ?>">

          <label>Username</label>
          <input class="form-control" type="text" name="username" value="<?php if(!empty($username)){echo $username;} ?>">

          <label>Password</label>
          <input class="form-control" type="text" name="password" value="<?php if(!empty($password)){echo $password;} ?>">

          <label>email</label>
          <input class="form-control" type="text" name="email" value="<?php if(!empty($email)){echo $email;} ?>">

          <select name="lvlList">
            <option value="">Please Select a User Level</option>
            <option value="1">Web Admin</option>
            <option value="2">web Master</option>
          </select>
          <br><br>
          <button name="submit">Create User</button>
        </form>
      </div>

      <div class="contentHeader" id="editUser">
      <?php
        $id = $_SESSION['users_creds'];
        $popForm = getUser($id);

        if(isset($_POST['editSubmit'])) {
            $namef = trim($_POST['namef']);
            $namel = trim($_POST['namel']);
            $usename = trim($_POST['usename']);
            $pword = trim($_POST['pword']);
            $mail = trim($_POST['mail']);

            $result2 = editUser($id, $namef, $namel, $usename, $pword, $mail);
            $message2 = $result2;
        }

        if(!empty($message)){echo $message2;}
      ?>
        <h1>Edit Your Info</h1>

        <form role="form" action="cmsIndex.php" method="post">
          <label>First Name</label>
          <input class="form-control" type="text" name="namef" value="<?php echo $popForm['user_fname']; ?>">
        
          <label>Last Name</label>
          <input class="form-control" type="text" name="namel" value="<?php echo $popForm['user_lname']; ?>">
        
          <label>Username</label>
          <input class="form-control" type="text" name="usename" value="<?php echo $popForm['user_name']; ?>">
        
          <label>Password</label>
          <input class="form-control" type="text" name="pword" value="<?php echo $popForm['user_pass']; ?>">
        
          <label>Email</label>
          <input class="form-control" type="text" name="mail" value="<?php echo $popForm['user_email']; ?>">
          <br><br>
          <button name="editSubmit">Edit User</button>
        </form>
      </div>

      <div class="contentHeader" id="deleteUser">
      <?php
        $tbl = "tbl_user";
        $users = getAll($tbl);
      ?>
        <h1>Delete a User</h1>
        <?php
          while($row = mysqli_fetch_array($users)){
            echo "{$row['user_name']}<a href=\"includes/caller.php?caller_id=delete&id={$row['user_id']}\">Delete User</a><br>";
          }
        ?>
      </div>
      
    </div>
  </section>
  <!-- USER END -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/cmsScript.js"></script>
  </body>
</html>