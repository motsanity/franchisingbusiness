<?php
	require_once("db.php");

	if(isset($_REQUEST["id"])){
		$id = $_REQUEST["id"];
		$query = " 	WHERE a.franchisee_id = :id";
	}
	$stm = $conn->prepare("SELECT *, a.id as w_id FROM webinars a join franchisee b on a.franchisee_id = b.id_no");
	if (isset($_REQUEST["id"]))
		$stm->execute();
	else
		$stm->execute();
	$result = $stm->fetchAll(PDO::FETCH_OBJ);

?>