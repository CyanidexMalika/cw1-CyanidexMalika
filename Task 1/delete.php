<?php
session_start(); // Start or resume a session

$mysqli = new mysqli("localhost", "root", "", "signup");
// Checking if the connection to the database was successful
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user_id = $_POST['user_id'];

    $delete_user_query = "DELETE FROM list WHERE id = $user_id";
    if ($mysqli->query($delete_user_query)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}
?>