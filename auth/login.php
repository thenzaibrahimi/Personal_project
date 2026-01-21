<?php
session_start();
include "../config/db.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass  = $_POST['password'];

    $res = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    $user = mysqli_fetch_assoc($res);

    if ($user && password_verify($pass, $user['password'])) {
        $_SESSION['user'] = $user;

        if ($user['role'] === 'admin') {
            header("Location: ../admin/dashboard.php");
        } else {
            header("Location: ../index.php");
        }
        exit();
    } else {
        $error = "Wrong email or password!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card p-4 col-md-6 mx-auto shadow">
        <h3 class="mb-3 text-center">Login</h3>

        <?php if (isset($error)) : ?>
            <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST">
            <input class="form-control mb-3" name="email" type="email" placeholder="Email" required>
            <input class="form-control mb-3" name="password" type="password" placeholder="Password" required>
            <button class="btn btn-primary w-100" name="login">Login</button>
        </form>

        <p class="mt-3 text-center">
            Don't have an account? <a href="register.php">Register</a>
        </p>
    </div>
</div>

</body>
</html>
