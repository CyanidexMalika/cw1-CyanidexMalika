<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "signup");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = intval($_POST['user_id']); // Convert to integer
    $amount = $_POST['amount'];

    // Fetching user details
    $user_query = "SELECT * FROM list WHERE id = $user_id";
    $user_result = $mysqli->query($user_query);

    if ($user_result && $user_result->num_rows > 0) {
        $user = $user_result->fetch_assoc();


        $insert_query = "INSERT INTO transactions (user_id, amount) VALUES ($user_id, $amount)";
        $mysqli->query($insert_query);

        // session variable with the success message
        $_SESSION['transaction_success'] = "Transaction completed successfully";

        // Redirect back to the admin panel 
        header("Location: admin.php");
        exit();
    } else {
        echo "User not found!";
    }
}
?>