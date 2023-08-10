<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
    exit();
}
$mysqli = new mysqli("hostname", "root", "", "signup");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
$user_id = $_SESSION["user_id"];
$query = "SELECT * FROM `list` WHERE `id` = '$user_id'";
$result = $mysqli->query($query);

if (!$result) {
    echo "Query error: " . $mysqli->error;
} else {
    $user = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="welcome.css">
</head>

<body>
    <?php if (isset($user)): ?>
        <h1>Welcome,<span class="name">
                <?= htmlspecialchars($user["fullname"]) ?>!</h3>
        </h1>

        <p>Your email:
            <?= htmlspecialchars($user["email"]) ?>
        </p>

        <p>Your gender:
            <?= htmlspecialchars($user["gender"]) ?>
        </p>
        <a href="logout.php">Logout</a>
    <?php else: ?>
        <p>Something went wrong. Please try again later.</p>
    <?php endif; ?>
</body>

</html>