<?php
	require_once("db.php");

	if(isset($_REQUEST["id"])){
		$id = $_REQUEST["id"];
		$query = " 	WHERE a.franchisee_id = :id";
	}
	$stm = $conn->prepare("select a.id, c.title, c.description, c.video, d.first_name, d.last_name from active_webinars a join franchisee b on a.franchisee_id = b.id_no join webinars c on a.webinar_id = c.id join franchisee d on c.franchisee_id = d.id_no" . $query);
	if (isset($_REQUEST["id"]))
		$stm->execute(array(":id" => $id));
	else
		$stm->execute();
	$result = $stm->fetchAll(PDO::FETCH_OBJ);

	foreach ($result as $w) {
		$video = $w->video;
	}

	$url = $_SERVER["PHP_SELF"];
	$current = explode('/', $url)[count(explode('/', $url)) - 1];

	if (!isset($video) && $current == "watch-video.php"){

		$stm = $conn->prepare("select a.id, c.title, c.description, c.video, d.first_name, d.last_name from active_webinars a join franchisee b on a.franchisee_id = b.id_no join webinars c on a.webinar_id = c.id join franchisee d on c.franchisee_id = d.id_no WHERE a.franchisee_id = 00510835");
		$stm->execute();
		$result = $stm->fetchAll(PDO::FETCH_OBJ);
	}

?>