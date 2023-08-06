<?php






$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "signup";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
if ($conn == false) {
    die('connection failed:' . $conn->connect_error);

} else {
}




?>