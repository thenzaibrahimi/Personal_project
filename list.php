<?php

include "../config/db.php";
$stmt = $conn->query("SELECT * FROM students");

?>

<table class = "table table-bordered">
    <tr>
        <th>Id<th>
        <th>Name<th>
        <th>Email<th>
        <th>Age<th>
</tr>

<?php foreach($stmt as $row): ?>

    <tr>
        <td><?= $row['id']  ?></td>
        <td><?= $row['fullname']  ?></td>
        <td><?= $row['email']  ?></td>
        <td><?= $row['age']  ?></td>
    </tr>
<?php endforeach; ?>
</table>