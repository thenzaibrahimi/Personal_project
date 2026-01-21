<?php include "../config/db.php";
$id=$_GET['id'];
$f=mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM foods WHERE id=$id"));

if(isset($_POST['update'])){
 mysqli_query($conn,"UPDATE foods SET 
 name='{$_POST['name']}', description='{$_POST['desc']}', price='{$_POST['price']}'
 WHERE id=$id");
 header("Location: foods.php");
}
?>
<form method="POST">
<input name="name" value="<?= $f['name'] ?>"><br>
<textarea name="desc"><?= $f['description'] ?></textarea><br>
<input name="price" value="<?= $f['price'] ?>"><br>
<button name="update">Update</button>
</form>
