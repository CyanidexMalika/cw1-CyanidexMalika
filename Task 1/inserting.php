<?php
require "connection.php";


if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fullname = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $encryptedpassword = password_hash($password, PASSWORD_DEFAULT);
    $duplication = mysqli_query($conn, "SELECT * FROM list WHERE email = '$email'");
    if (mysqli_num_rows($duplication) > 0) {
        echo "<script>alert('Email already exists');</script>";
    } else {
        $query = "INSERT INTO `list`(`fullname`, `email`, `gender`, `password`) VALUES ('$fullname','$email','$gender','$encryptedpassword')";
        mysqli_query($conn, $query);
        echo "<script>alert('registration done');</script>";
    }
}

?>