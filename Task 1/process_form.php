<?php
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "signup";

// Create a database connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $fullname = $_POST["fullname"];
    $phone = $_POST["phone"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Insert data into the database
    $sql = "INSERT INTO submissions (email, fullname, phone, subject, message) VALUES ('$email', '$fullname', '$phone', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Submitted successfully'); window.location = 'index.php';</script>";
        exit();


    } else {
        echo "<script>alert('Couldn't submit'); window.location = 'index.php';</script>";
        exit();
    }
}

// Close the database connection
$conn->close();
?>