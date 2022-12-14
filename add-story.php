<?php
	require_once("db.php");
	$target_dir = "uploads/stories/";
	$target_file = $target_dir . basename($_FILES["story_image"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if(isset($_POST["submit"])) {
	  $check = getimagesize($_FILES["story_image"]["tmp_name"]);
	  if($check !== false) {
	    $uploadOk = 1;

	  } else {
	    $uploadOk = 0;
	  }
	}

	// Check if file already exists
	if (file_exists($target_file)) {
	  $uploadOk = 0;
	  $url = $_SERVER["REQUEST_URI"];
	  $current = explode('?', explode('/', $url)[count(explode('/', $url)) - 1])[1];
	  session_start();
	  $_SESSION["file_error"] = "Image already exists. Please rename your file before uploading."; 
	  header("Location: profile.php?" . $current);
	}

	// Check file size
	if ($_FILES["story_image"]["size"] > 20000000) { // 20MB
	  
	  $uploadOk = 0;
	  $url = $_SERVER["REQUEST_URI"];
	  $current = explode('?', explode('/', $url)[count(explode('/', $url)) - 1])[1];
	  session_start();
	  $_SESSION["file_error"] = "File exceeded maximum size."; 
	  header("Location: profile.php?" . $current);
	}

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {

	  $uploadOk = 0;
	  $url = $_SERVER["REQUEST_URI"];
	  $current = explode('?', explode('/', $url)[count(explode('/', $url)) - 1])[1];
	  session_start();
	  $_SESSION["file_error"] = "Only image file types are allowed."; 
	  header("Location: profile.php?" . $current);
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	  
	  $url = $_SERVER["REQUEST_URI"];
	  $current = explode('?', explode('/', $url)[count(explode('/', $url)) - 1])[1];
	  session_start();
	  $_SESSION["file_error"] = "File was not uploaded."; 
	  header("Location: profile.php?" . $current);
	// if everything is ok, try to upload file
	} else {
	  if (move_uploaded_file($_FILES["story_image"]["tmp_name"], $target_file)) {

		$fi = $_REQUEST["id"];
		$t = $_POST['story_title'];
		$i = $target_file;
		$d = $_POST["story_description"];

		$stm = $conn->prepare("INSERT INTO stories(franchisee_id, image, title, description) VALUES(:fi, :i, :t, :d)");

		if ($stm->execute(array(':fi' => $fi, ':i' => $i, ':t' => $t, ':d' => $d))) {
			session_start();
			//$_SESSION["uh"] =  1;
			header("Location: profile.php?id=" . $fi);
		}
		else {
			session_start();
			//$_SESSION["uh"] =  0;
			header("Location: profile.php?id=" . $fi);
		}

	  } else {
	      $url = $_SERVER["REQUEST_URI"];
    	  $current = explode('?', explode('/', $url)[count(explode('/', $url)) - 1])[1];
    	  session_start();
    	  $_SESSION["file_error"] = "File was not uploaded."; 
    	  header("Location: profile.php?" . $current);
	  }
	}

?>