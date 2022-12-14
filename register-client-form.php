<?php

	require_once("db.php");
	
     include("fetch-franchisees.php"); 
    //$has_contact = false;
    foreach ($result as $r){
        $email = $r->email;
        $phone = $r->phone_no;
        $fb = $r->fb;
        $fi = $r->franchisee_id;
        $fb = $r->fb;
        //$has_contact = true;
    }

	$id = $_REQUEST["id"];
	$fn = $_POST["firstname"];
	$mn = $_POST["middlename"];
	$ln = $_POST["lastname"];
	$ad = $_POST["address"];
	$bd = $_POST["birthdate"];
	$em = $_POST["email"];
	$ph = $_POST["phone"];

	$stm = $conn->prepare("INSERT INTO client (franchisee_id, first_name, middle_name, last_name, address, birthdate, email, phone) VALUES(:id, :fn, :mn, :ln, :ad, :bd, :em, :ph)");

	if ($stm->execute(array(':id' => $id, ':fn' => $fn, ':mn' => $mn, ':ln' => $ln, ':ad' => $ad, ':bd' => $bd, ':em' => $em, ':ph' => $ph))) {
		session_start();
		$_SESSION["g"] =  1;
		//header("Location: client-register.php?id=" . $id);
		  header("Location: $fb");
	}
	else {
		session_start();
		$_SESSION["g"] =  0;
		header("Location: client-register.php?id=" . $id);
	}


?>