<?php
	
	$conn = new mysqli("localhost", "batwares_root", "pcenfant", "batwares_frb");
    
	
	$fn = $_POST['fn'];
	$ph = $_POST['ph'];
	$fi = $_POST['fi'];
	$lc = $_POST['lc'];
	$inq = $_POST['inq'];
	
	if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
   
	
	$sql = "INSERT INTO partners VALUES (NULL, '{$fn}', '{$ph}', '{$lc}', '{$fi}','{$inq}', NOW())";
	

    if ($conn->query($sql) === TRUE) {
      
      die(header("Location: kind-contact.php?id=" .$fi));
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
	
	
	
 ?>
    