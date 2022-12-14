<?php
	require_once("db.php");

	$fi = $_REQUEST["id"];
	$ds = htmlspecialchars($_POST['headline']);

	$stm = $conn->prepare("INSERT INTO headlines(franchisee_id, description) VALUES(:fi, :ds) ON DUPLICATE KEY UPDATE description = :ds");

	if ($stm->execute(array(':fi' => $fi, ':ds' => $ds, ':ds' => $ds))) {
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