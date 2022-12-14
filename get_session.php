<?php
  if (!isset($_SESSION["r"]) || $_SESSION["r"] != 2) {
    $_SESSION["r"] = 0; // bad access
    header("Location: login.php");
  }
  
?>