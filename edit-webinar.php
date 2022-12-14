<?php
	require_once("db.php");

	$fi = $_REQUEST["id"];
	$pi = $_REQUEST["post_id"];
	$t = $_POST['webinar_title'];
	$d = $_POST["webinar_description"];

	$stm = $conn->prepare("UPDATE webinars SET title =:t, description =:d WHERE id = :pi");

	if ($stm->execute(array(':t' => $t, ':d' => $d, ':pi' => $pi))) {
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