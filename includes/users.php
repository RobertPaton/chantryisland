<?php
	function createUser($fname, $lname, $username, $password, $level, $email) {
		include('connect.php');
		$ip = 0;
		$userstring = "INSERT INTO tbl_user VALUES(NULL,'{$fname}','{$lname}','{$username}','{$password}','{$email}','{$level}','{$ip}')";

		$userquery = mysqli_query($link, $userstring);
		if($userquery) {
			redirect_to('cmsIndex.php');
		}else{
			$message = "Something Has Gone Wrong.";
			return $message;
		}

		mysqli_close($link);
	}

	function getUser($id) {
		include('connect.php');
		$userstring = "SELECT * FROM tbl_user WHERE user_id = {$id}";
		$userquery = mysqli_query($link, $userstring);
		if($userquery) {
			$found_user = mysqli_fetch_array($userquery, MYSQLI_ASSOC);
			return $found_user;
		}else{
			$error = "There Was a Problem Finding Your Account.";
			return $error;
		}
		mysqli_close($link);
	}

	function editUser($id, $namef, $namel, $usename, $pword, $mail) {
		include("connect.php");
		$updatestring = "UPDATE tbl_user SET user_fname='{$namef}',user_lname='{$namel}',user_name='{$usename}',user_pass='{$pword}',user_email='{$mail}' WHERE user_id={$id}";
		$updatequery = mysqli_query($link, $updatestring);

		if($updatequery) {
			redirect_to('cmsIndex.php');
		}else{
			$message = "Something Has Gone Wrong.";
			return $message;
		}

		mysqli_close($link);
	}

	function deleteUser($id) {
		include("connect.php");
		$delstring = "DELETE FROM tbl_user WHERE user_id={$id}";
		$delquery = mysqli_query($link, $delstring);

		if($delquery) {
			redirect_to("../cmsIndex.php");
		}else{
			echo "Something Went Wrong.";
		}

		mysqli_close($link);
	}

	function deleteImage($id) {
		include("connect.php");
		$delimagestring = "DELETE FROM tbl_image WHERE image_id={$id}";
		$delimagequery = mysqli_query($link, $delimagestring);

		if($delimagequery) {
			redirecT_to("../cmsIndex.php");
		}else{
			echo "Something Went Wrong.";
		}
		mysqli_close($link);
	}

	function deleteNews($id) {
		include("connect.php");
		$delnewsstring = "DELETE FROM tbl_news WHERE newS_id={$id}";
		$delnewsquery = mysqli_query($link, $delnewsstring);

		if($delnewsquery) {
			redirect_to("../cmsIndex.php");
		}else{
			echo "Something Went Wrong";
		}
		mysqli_close($link);
	}
?>