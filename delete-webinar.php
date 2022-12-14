<?php
	require_once("db.php");

	$fi = $_REQUEST["id"];
	$pi = $_REQUEST["post_id"];

	$stm_get = $conn->prepare("select video as i from webinars where id = :pi");
	$stm_get->execute(array(':pi' => $pi));
	$result = $stm_get->fetchAll(PDO::FETCH_OBJ);

	foreach ($result as $r) {
		$image_url = $r->i;
	}

	$stm = $conn->prepare("DELETE FROM webinars WHERE id = :pi");

	if ($stm->execute(array(':pi' => $pi))) {
		// DELETE IMAGE IN STORAGE
		$file_pointer = $image_url; 
   
		// Use unlink() function to delete a file 
		unlink($file_pointer);

		session_start();
		//$_SESSION["uh"] =  1;
		header("Location: profile.php?id=" . $fi);
	}
	else {
		session_start();
		//$_SESSION["uh"] =  0;
		header("Location: profile.php?id=" . $fi);
	}

?>