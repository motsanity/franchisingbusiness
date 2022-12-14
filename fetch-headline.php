<?php
	require_once("db.php");

	if(isset($_REQUEST["id"])){
		$id = $_REQUEST["id"];
		$query = " 	WHERE franchisee_id = :id";
	}
	$stm = $conn->prepare("select count(id) as c, id, image, description, title from headlines " . $query);
	if (isset($_REQUEST["id"]))
		$stm->execute(array(":id" => $id));
	else
		$stm->execute();
	$result = $stm->fetchAll(PDO::FETCH_OBJ);

?>