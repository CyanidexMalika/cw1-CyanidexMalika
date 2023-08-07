<?php
$gethash = "";
$hashpasswordcompare = "";

require 'connection.php';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $loginemail = $_POST['loginemail'];
    $loginpassword = $_POST['loginpassword'];
    $result = mysqli_query($conn, "SELECT * FROM list WHERE email = '$loginemail'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) == 1) {
        $gethash = $conn->query("SELECT password FROM list WHERE email = '$loginemail'");
        $hashpasswordcompare = $gethash->fetch_assoc()['password'];
        if (password_verify($loginpassword, $hashpasswordcompare)) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            header("location: welcome.php");

        } else {
            echo "<script>alert('Wronggg Credentials')</script>";

        }
    }
}

?>