<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "signup");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_POST["user_id"])) {
    $user_id = $_POST["user_id"];

    // Delete the user
    $delete_query = "DELETE FROM list WHERE id = ?";
    $stmt = $mysqli->prepare($delete_query);
    $stmt->bind_param("i", $user_id);

    if ($stmt->execute()) {
        echo "User deleted successfully.";
    } else {
        echo "Error deleting user.";
    }

    $stmt->close();
}
?>