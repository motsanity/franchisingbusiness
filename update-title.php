<?php
	require_once("db.php");

	$fi = $_REQUEST["id"];
	$t = $_POST['title'];

	$stm = $conn->prepare("INSERT INTO headlines(franchisee_id, title) VALUES(:fi, :t) ON DUPLICATE KEY UPDATE title = :t");

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