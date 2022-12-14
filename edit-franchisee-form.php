<?php

	require_once("db.php");

	$id = $_REQUEST["id"];
	$fn = $_POST["firstname"];
	$mn = $_POST["middlename"];
	$ln = $_POST["lastname"];
	$bd = $_POST["birthdate"];
	$em = $_POST["email"];
	$fb = $_POST["fb"];
	$ph = $_POST["phone"];
	$sv = $_POST["sv"];
	$fb_id = $_POST["fb_id"];
	$pixel = $_POST["pixel"];

	if (isset($_POST["pw"]) && strlen($_POST["pw"]) > 0){
		$query = "UPDATE franchisee SET first_name = :fn, middle_name = :mn, last_name = :ln, date_of_birth = :bd, email = :em, fb = :fb, phone_no = :ph, sv = :sv ,fb_id = :fb_id, pixel = :pixel , password = :pw WHERE id_no = :id";
		$pw = $_POST["pw"];
		$params = [
			':fn' => $fn, 
			':mn' => $mn, 
			':ln' => $ln, 
			':bd' => $bd, 
			':em' => $em,
			':fb' => $fb,
			':ph' => $ph,
			':sv' => $sv,
			':fb_id' =>$fb_id,
			':pixel' =>$pixel,
			':pw' => md5($pw),
			':id' => $id

		];	
	}
	else {
		$query = "UPDATE franchisee SET first_name = :fn, middle_name = :mn, last_name = :ln, date_of_birth = :bd, email = :em, fb = :fb, phone_no = :ph,sv = :sv, pixel = :pixel, fb_id = :fb_id WHERE id_no = :id";
		$params = [
			':fn' => $fn, 
			':mn' => $mn, 
			':ln' => $ln, 
			':bd' => $bd, 
			':em' => $em,
			':fb' => $fb,
			':ph' => $ph,
			':sv' => $sv,
			':fb_id' =>$fb_id,
			':pixel' =>$pixel,
			':id' => $id 
		];	
	}
	$em = $_POST["email"];
	$ph = $_POST["phone"];
	$fb = $_POST["fb"];
	$fb_id = $_POST["fb_id"];
	$sv = $_POST["sv"];
	$pixel = $_POST["pixel"];

	$stm = $conn->prepare($query);

	if ($stm->execute($params)) {
		session_start();
		$_SESSION["up"] =  1;
		//$_REQUEST["id"] = $id;
		header("Location: franchisee-detail.php?id=" . $id);
	}
	else {
		session_start();
		$_SESSION["up"] =  0;
		//$_REQUEST["id"] = $id;
		header("Location: franchisee-detail.php?id=" . $id);
	}


?>