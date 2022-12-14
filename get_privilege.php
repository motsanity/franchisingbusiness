<?php

	if (!isset($_SESSION["p"]) || !in_array($_SESSION["p"], $permission_allowed)) {
		$_SESSION["r"] = 3; // insufficient permission
	    header("Location: login.php");
	}                  

  	if (!isset($page_exception)) { // all pages except franchisee-detail

		if ( (isset($_REQUEST["id"]) && $_SESSION["u"] != $_REQUEST["id"])
			|| (isset($_REQUEST["a_id"]) && $_SESSION["u"] != $_REQUEST["a_id"])) {
		$_SESSION["r"] = 3; // insufficient permission
		header("Location: login.php");
		}
	}

?>