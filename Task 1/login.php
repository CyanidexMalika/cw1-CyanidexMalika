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
            session_start();
            session_regenerate_id(); // Prevents session fixation attack

            $_SESSION["user_id"] = $row["id"]; // Changed to $row["id"]

            if ($row['role'] === "admin") {
                header("Location: admin.php");
            } else {
                header("Location: welcome.php"); // Redirect for regular users
            }
            exit(); // Added exit after each header()

        } else {
            echo "<script>alert('Wrong Credentials'); window.location = 'index.php';</script>";
            exit();
        }
    }
}
?>