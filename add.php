<?php
include "../config/db.php";

if(isset($_POST['save'])){
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "INSERT INTO students (fullname, email, age) 
       VALUES (:fullanme, :email, :age)"; 
       $stmt = $conn->prepare($sql);
       $stmt->execute([
        ':fullanme'=>$name,
        ':email'=>$email,
        ':age'=>$age
       ]);
       header("Location: lisst.php");
}
?>