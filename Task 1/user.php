<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "signup");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];

    $user_query = "SELECT * FROM list WHERE id = $user_id";
    $user_result = $mysqli->query($user_query);

    if ($user_result && $user_result->num_rows > 0) {
        $user = $user_result->fetch_assoc();
    }
}

if (isset($_POST['add_user'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $role = 'user';

    $insert_query = "INSERT INTO list (fullname, email, gender, role) VALUES ('$fullname', '$email', '$gender', '$role')";
    $insert_result = $mysqli->query($insert_query);

    if ($insert_result) {
        $_SESSION['transaction_success'] = 'User added successfully.';
        header("Location: admin.php");
        exit();
    } else {
        $_SESSION['transaction_success'] = 'Failed to add user.';
    }
}

?>

<!DOCTYPE html>
<html>
<!--adding user to the database-->

<head>
    <title>Add User - Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <?php if (isset($user) && $user['role'] === 'admin'): ?>
        <header>
            <div class="container">
                <h1>Admin Dashboard</h1>

            </div>
        </header>
        <main>
            <!--adding user to database-->
            <h1>Add User</h1>
            <form method="post" action="">
                <label for="fullname">Full Name:</label>
                <input type="text" id="fullname" name="fullname" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="gender">Gender:</label>
                <input type="text" id="gender" name="gender" required>

                <button type="submit" name="add_user">Add User</button>

            </form>
        </main>
        <footer>
            <div class="container">
                <p>&copy; 2023 Admin Panel. All rights reserved.</p>
            </div>
        </footer>
    <?php else: ?>
        <?php
        header("Location: index.php");
        exit();
        ?>
    <?php endif; ?>
    <style>
        button {
            background-color: black;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;

        }

        button:hover {
            background-color: orangered;
        }
    </style>
</body>

</html>