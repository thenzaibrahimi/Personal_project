<?php
include "../config/admin_only.php";
include "../config/db.php";
$res = mysqli_query($conn,"SELECT * FROM users");
?>

<?php include "sidebar.php"; ?>
<div class="p-4">
<h2>Users</h2>
<table class="table table-bordered">
<tr><th>Name</th><th>Email</th><th>Role</th></tr>
<?php while($u=mysqli_fetch_assoc($res)): ?>
<tr>
<td><?= $u['fullname'] ?></td>
<td><?= $u['email'] ?></td>
<td><?= $u['role'] ?></td>
</tr>
<?php endwhile; ?>
</table>
</div>
