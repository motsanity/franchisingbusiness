<?php
	require_once("db.php");

	if(isset($_REQUEST["id"])){
		$id = $_REQUEST["id"];
		$query = " 	WHERE franchisee_id = :id";
	}
	$stm = $conn->prepare("select id, video, description, title from webinars" . $query);
	if (isset($_REQUEST["id"]))
		$stm->execute(array(":id" => $id));
	else
		$stm->execute();
	$result = $stm->fetchAll(PDO::FETCH_OBJ);

?>