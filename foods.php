<?php include "config/db.php"; include "header.php";
$res = mysqli_query($conn,"SELECT foods.*, categories.name AS cat 
FROM foods JOIN categories ON foods.category_id=categories.id"); ?>

<div class="container my-5">
<h2 class="text-center mb-4">Our Menu</h2>
<div class="row">
<?php while($f=mysqli_fetch_assoc($res)): ?>
<div class="col-md-4 mb-3">
<div class="card food-card">
<img src="assets/images/<?= $f['image'] ?>" class="card-img-top">
<div class="card-body">
<h5><?= $f['name'] ?></h5>
<p><?= $f['description'] ?></p>
<small><?= $f['cat'] ?></small><br>
<span class="badge bg-success"><?= $f['price'] ?> €</span>
</div>
</div>
</div>
<?php endwhile; ?>
</div>
</div>

<script src="assets/js/main.js"></script>
<?php include "footer.php"; ?>
