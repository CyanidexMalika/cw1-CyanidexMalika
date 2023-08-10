<?php
//session starting and destroying so it can be redirected back to welcome page of admin panel
session_start();
session_unset();
session_destroy();
header("Location: index.php");
exit();
?>