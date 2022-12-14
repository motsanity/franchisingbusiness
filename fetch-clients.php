<?php
	require_once("db.php");

	if(isset($_REQUEST["id"])){
		$id = $_REQUEST["id"];
		$query = " 	WHERE a.franchisee_id = :id";
	}
	else {
		$query = "";
	}
	$stm = $conn->prepare("select a.* from client a" . $query);
	if (isset($_REQUEST["id"]))
		$stm->execute(array(":id" => $id));
	else
		$stm->execute();
	$result = $stm->fetchAll(PDO::FETCH_OBJ);

?>