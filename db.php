<?php
	$s = "localhost";
	$u = "root";
	$p = "";

	try {
	  $conn = new PDO("mysql:host=$s;dbname=frb", $u, $p);
	  // set the PDO error mode to exception
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  //echo "Connected successfully";
	} catch(PDOException $e) {
	  //echo "Connection failed: " . $e->getMessage();
	}
?>
