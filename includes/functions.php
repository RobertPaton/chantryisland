<?php
	function redirect_to($location) {
		if($location != NULL) {
			header("Location: {$location}");
			exit;
		}
	}

	function addImage($img,$name,$photographer) {
		include('connect.php');
		$img = mysqli_real_escape_string($link, $img);

		if($_FILES['images_file']['type'] == "image/jpg" || $_FILES['images_file']['type'] == "image/jpeg") {
			$targetpath = "img/{$img}";
			if(move_uploaded_file($_FILES['images_file']['tmp_name'],$targetpath)) {

				$orig = "img/{$img}";
				if(!copy($orig)) {
					echo "Failed To copy";
				}

				$qstring = "INSERT INTO tbl_images VALUES(NULL,'{$img}','{$name}','{$photographer}')";

				$result = mysqli_query($link, $qstring);

				redirect_to("cmsIndex.php");
			}
		}else{
			echo "This Is Not a jpg or jpeg.";
		}
		mysqli_close($link);
	}

	function addNews($title,$body,$date) {
		include('connect.php');
		$newsstring = "INSERT INTO tbl_news VALUES(NULL,'{$title}','{$body}','{$date}')";

		$newsquery = mysqli_query($link, $newsstring);
		if($newsquery) {
			redirect_to('cmsIndex.php');
		}else{
			$message = "News Has Not Been Added. An Error Has Occured.";
			return $message;
		}
		mysqli_close($link);
	}

	function addEvent($title,$body,$date) {
		include('connect.php');
		$newsstring = "INSERT INTO tbl_events VALUES(NULL,'{$title}','{$body}','{$date}')";

		$newsquery = mysqli_query($link, $newsstring);
		if($newsquery) {
			redirect_to('cmsIndex.php');
		}else{
			$message = "Event Has Not Been Added. An Error Has Occured.";
			return $message;
		}
		mysqli_close($link);
	}
?>