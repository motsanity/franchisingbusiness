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
   
	
	$sql = "INSERT INTO viewers VALUES (NULL, '{$fn}', '{$ph}', '{$lc}', '{$fi}','{$inq}', NOW())";
	

    if ($conn->query($sql) === TRUE) {
      
      die(header("Location: https://drive.google.com/file/d/1SiYS4AJwBSy8kVlsl5OKrWyqjsllMxAp/view?usp=sharing"));
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
	
	
	
 ?>
    