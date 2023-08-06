<?php
require 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $loginemail = $_POST['loginemail'];
    $loginpassword = $_POST['loginpassword'];
    $result = mysqli_query($conn, "SELECT * FROM list WHERE email = '$loginemail'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
        if ($loginpassword == $row["password"]) {

            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("location: welcome.php");
        }
    } else {
        echo "<script>alert('Email not registered');</script>";
    }
}

?>