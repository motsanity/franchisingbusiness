<?php
	if (strlen($_REQUEST["id"]) == 0 || !isset($_REQUEST["id"])){
		$url = $_SERVER["PHP_SELF"];
		$current = "Location: " . explode('/', $url)[count(explode('/', $url)) - 1] . "?id=00510835";
		$_REQUEST["id"] = "00510835";
		header($current );
	}
	
?>