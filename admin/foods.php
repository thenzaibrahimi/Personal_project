<?php
include "../config/admin_only.php";
include "../config/db.php";
$res = mysqli_query($conn,"SELECT foods.*, categories.name AS cat 
FROM foods JOIN categories ON foods.category_id=categories.id");
?>

<?php include "sidebar.php"; ?>
<div class="p-4">
<h2>Foods</h2>
<a href="add_food.php" class="btn btn-success mb-3">➕ Add Food</a>

<table class="table table-striped">
<tr><th>Image</th><th>Name</th><th>Category</th><th>Price</th><th>Action</th></tr>
<?php while($f=mysqli_fetch_assoc($res)): ?>
<tr>
<td><img src="../assets/images/<?= $f['image'] ?>" width="60"></td>
<td><?= $f['name'] ?></td>
<td><?= $f['cat'] ?></td>
<td><?= $f['price'] ?> €</td>
<td>
<a class="btn btn-sm btn-warning" href="edit_food.php?id=<?= $f['id'] ?>">Edit</a>
<a class="btn btn-sm btn-danger" href="delete_food.php?id=<?= $f['id'] ?>">Delete</a>
</td>
</tr>
<?php endwhile; ?>
</table>
</div>
