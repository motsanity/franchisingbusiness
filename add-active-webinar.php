<?php
	require_once("db.php");

	$fi = $_REQUEST["id"];
	$t = $_POST['webinar_id'];

	$stm = $conn->prepare("INSERT INTO active_webinars(franchisee_id, webinar_id) VALUES(:fi, :t) ON DUPLICATE KEY UPDATE webinar_id = :t");

	if ($stm->execute(array(':fi' => $fi, ':t' => $t, ':t' => $t))) {
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