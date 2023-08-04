<?php
$created = 0;
$user = 0;
include 'database.php';
$fullname = $_POST['username'];
$email = $_POST['registeremail'];
$gender = $_POST['gender'];
$password = $_POST['registerpassword'];
//$sql = "insert into `list`(`fullname`, `email`, `gender`, `password`) VALUES
//('$fullname','$email','$gender','$password')";
//$result = mysqli_query($con, $sql);
//if ($result) {
// echo "Data inserted";

// } else {
// die(mysqli_errno($con));
//}
$sql = "select * from `list` where
email='$email'";
$result = mysqli_query($con, $sql);
if ($result) {
    $num = mysqli_num_rows($result);
    if ($num > 0) {
        echo "email already exist";
    } else {
        $sql = "insert into `list`(`fullname`, `email`, `gender`, `password`) VALUES
            ('$fullname','$email','$gender','$password')";
        $result = mysqli_query($con, $sql);
        if ($result) {
            $created = 1;

        } else {
            die(mysqli_errno($con));
        }
    }
}

?>