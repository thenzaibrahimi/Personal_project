<?php
$stmt = $conn->query("SELECT COUNT (*) FROM students");
$total = $stmt->fetchColumn();
?>

<h2> Total Students: <?=$total ?></h2>