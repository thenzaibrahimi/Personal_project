<?php
include "../config/db.php";

if(isset($_POST['register'])){
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    mysqli_query($conn,"INSERT INTO users(fullname,email,password) 
    VALUES('$name','$email','$pass')");

    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
<div class="card p-4 col-md-6 mx-auto">
<h3>Register</h3>
<form method="POST">
<input class="form-control mb-2" name="fullname" placeholder="Full Name" required>
<input class="form-control mb-2" name="email" type="email" placeholder="Email" required>
<input class="form-control mb-2" name="password" type="password" placeholder="Password" required>
<button class="btn btn-success w-100" name="register">Register</button>
</form>
</div>
</div>
</body>
</html>
