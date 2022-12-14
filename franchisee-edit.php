<?php
	require_once("db.php");

	$fi = $_REQUEST["id"];
	$a = $_REQUEST["action"];
	$u_id = $_REQUEST["a_id"];

	$stm = $conn->prepare("UPDATE franchisee SET privilege = :a WHERE id_no = :fi");

	if ($stm->execute(array(':a' => $a, ':fi' => $fi))) {
		session_start();
		//$_SESSION["uh"] =  1;
		header("Location: franchisees.php?a_id=" . $u_id);
	}
	else {
		session_start();
		//$_SESSION["uh"] =  0;
		header("Location: franchisee.php?a_id=" . $u_id);
	}

?>