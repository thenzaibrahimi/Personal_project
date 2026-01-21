<?php
include "auth.php";
if($_SESSION['user']['role'] !== 'admin'){
  header("Location: ../index.php");
  exit();
}
?>
