<?php include "../config/db.php";
mysqli_query($conn,"DELETE FROM foods WHERE id=".$_GET['id']);
header("Location: foods.php");
?>