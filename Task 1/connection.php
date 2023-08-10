<?php


$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "signup";
//using conn variable to store the result of the connection query
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if ($conn == false) {
    die('connection failed:' . $conn->connect_error);

} else {
}




?>