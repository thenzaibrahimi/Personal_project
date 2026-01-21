<?php include "../config/db.php";
$cats = mysqli_query($conn,"SELECT * FROM categories");

if(isset($_POST['add'])){
 $img=$_FILES['image']['name'];
 move_uploaded_file($_FILES['image']['tmp_name'],
 "../assets/images/".$img);

 mysqli_query($conn,"INSERT INTO foods(name,description,price,image,category_id)
 VALUES('{$_POST['name']}','{$_POST['desc']}','{$_POST['price']}','$img','{$_POST['cat']}')");
 header("Location: foods.php");
}
?>
<form method="POST" enctype="multipart/form-data">
<input name="name" placeholder="Name"><br>
<textarea name="desc"></textarea><br>
<input name="price"><br>
<select name="cat">
<?php while($c=mysqli_fetch_assoc($cats)): ?>
<option value="<?= $c['id'] ?>"><?= $c['name'] ?></option>
<?php endwhile; ?>
</select><br>
<input type="file" name="image"><br>
<button name="add">Add</button>
</form>
