<?php
include "../config/admin_only.php";
include "../config/db.php";

$foods = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM foods"));
$users = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM users"));
$cats  = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM categories"));
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="../assets/css/style.css" rel="stylesheet">

<div class="d-flex">
<?php include "sidebar.php"; ?>

<div class="p-4 w-100">
<h2>Admin Dashboard</h2>

<div class="row g-3 mt-3">
  <div class="col-md-4">
    <div class="card p-3 text-center">🍔 Foods<br><strong><?= $foods ?></strong></div>
  </div>
  <div class="col-md-4">
    <div class="card p-3 text-center">👥 Users<br><strong><?= $users ?></strong></div>
  </div>
  <div class="col-md-4">
    <div class="card p-3 text-center">📂 Categories<br><strong><?= $cats ?></strong></div>
  </div>
</div>
</div>
</div>
