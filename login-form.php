<?php

	include("db.php");

	$id = $_POST["idnumber"];
	$pw = $_POST["password"];
	$pw = md5($pw);

	$stm = $conn->prepare("select count(id) as c, privilege, id, id_no from franchisee where id_no = :id and password = :pw");

	$stm->execute(array(':id' => $id, ':pw' => $pw));
	$result = $stm->fetch(PDO::FETCH_OBJ);
	
	if ($result->c > 0) {
		session_start();
		
		$_SESSION["r"] =  2; // successful log in
		$_SESSION["p"] = $result->privilege;
		//$_SESSION["u"] = $result->id;
		$_SESSION["u"] = $result->id_no;
		if ($result->privilege == 1) // admin log in
			die(header("Location: franchisees.php?a_id=" . $_SESSION["u"]));
		else // other privilege log in
			die(header("Location: franchisee-detail.php?id=" . $_SESSION["u"]));
		
	}
	else {
		session_start();
		$_SESSION["r"] =  1; // log in error
		die(header("Location: login.php"));
	}


?>