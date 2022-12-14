<?php
	$s = "localhost";
	$u = "batwares_root";
	$p = "pcenfant";

	try {
	  $conn = new PDO("mysql:host=$s;dbname=batwares_frb", $u, $p);
	  // set the PDO error mode to exception
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  //echo "Connected successfully";
	} catch(PDOException $e) {
	  //echo "Connection failed: " . $e->getMessage();
	}
?>
