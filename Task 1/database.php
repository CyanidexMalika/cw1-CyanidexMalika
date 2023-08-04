<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'signup';
$con = mysqli_connect($host, $user, $password, $database);
if ($con) {
    //echo "success";

} else {
    die(mysqli_error($con));
}
?>