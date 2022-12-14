<?php
	require_once("db.php");

	if(isset($_REQUEST["id"])){
		$id = $_REQUEST["id"];
		$query = " 	WHERE a.id_no = :id";
	}
	else {
		$query = "";
	}
	$stm = $conn->prepare("select a.*, b.description from franchisee a join privileges b on a.privilege = b.id" . $query);
	if (isset($_REQUEST["id"]))
		$stm->execute(array(":id" => $id));
	else
		$stm->execute();
	$result = $stm->fetchAll(PDO::FETCH_OBJ);

?>