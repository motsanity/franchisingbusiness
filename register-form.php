<?php

	require_once("db.php");

	$id = $_POST["idnumber"];
	$fn = $_POST["firstname"];
	$mn = $_POST["middlename"];
	$ln = $_POST["lastname"];
	$bd = $_POST["birthdate"];
	$pw = md5($bd);

	$stm = $conn->prepare("INSERT INTO franchisee(first_name, middle_name, last_name, date_of_birth, id_no, password) VALUES(:fn, :mn, :ln, :bd, :id, :pw)");

	if ($stm->execute(array(':fn' => $fn, ':mn' => $mn, ':ln' => $ln, ':bd' => $bd, ':id' => $id, ':pw' => $pw))) {
		session_start();
		$_SESSION["g"] =  1;
		header("Location: register.php");
	}
	else {
		session_start();
		$_SESSION["g"] =  0;
		header("Location: register.php");
	}


?>