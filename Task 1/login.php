<?php
$gethash = "";
$hashpasswordcompare = "";
require 'connection.php'; // Include the database connection file

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $loginemail = $_POST['loginemail']; // Get the user's login email
    $loginpassword = $_POST['loginpassword']; // Get the user's login password

    $result = mysqli_query($conn, "SELECT * FROM list WHERE email = '$loginemail'"); // Query to fetch user details
    $row = mysqli_fetch_assoc($result); // Fetch the user's data

    if (mysqli_num_rows($result) == 1) {
        $gethash = $conn->query("SELECT password FROM list WHERE email = '$loginemail'"); // Get the hashed password from the database
        $hashpasswordcompare = $gethash->fetch_assoc()['password']; // Extract the hashed password

        if (password_verify($loginpassword, $hashpasswordcompare)) { // Compare hashed passwords
            session_start();
            session_regenerate_id(); // Prevent session fixation

            $_SESSION["user_id"] = $row["id"]; // Store user ID in session

            if ($row['role'] === "admin") {
                header("Location: admin.php"); // Redirect admin user to admin page
            } else {
                header("Location: welcome.php"); // Redirect normal user to welcome page
            }
            exit(); // Exit to prevent further processing
        } else {
            // Display an alert if credentials are incorrect
            echo "<script>alert('Wrong Credentials'); window.location = 'index.php';</script>";
            exit(); // Exit to prevent further processing
        }
    } else {
        // Display an alert if user not found
        echo "<script>alert('Wrong Credentials'); window.location = 'index.php';</script>";
        exit(); // Exit to prevent further processing
    }
}
?>