<?php
session_start();
$mysqli = new mysqli("localhost", "root", "", "signup");
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
//using prepared statement for fetching users data from database
if (isset($_SESSION["user_id"])) {
    $user_id = $_SESSION["user_id"];

    $user_query = "SELECT * FROM list WHERE id = ?";
    $user_statement = $mysqli->prepare($user_query);
    $user_statement->bind_param("i", $user_id);
    $user_statement->execute();
    $user_result = $user_statement->get_result();

    if ($user_result && $user_result->num_rows > 0) {
        $user = $user_result->fetch_assoc();
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin.css">
    <!--success alert for user adding-->
    <style>
        .success-alert {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php if (isset($user) && $user['role'] === 'admin'): ?>
        <header>
            <div class="container">
                <h1>Admin Dashboard</h1>
                <nav>
                    <ul>
                        <li><a href="#User">User</a></li>
                        <li><a href="transaction.html">Transaction</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            <h1>Panel</h1>
            <!--transaction success message section-->

            <?php if (isset($_SESSION['transaction_success'])): ?>
                <div class="success-alert">
                    <?php echo $_SESSION['transaction_success']; ?>
                </div>
                <?php unset($_SESSION['transaction_success']); ?>
            <?php endif; ?>
            <section class="user-list">
                <h2 id="User">User List</h2>
                <table id="userTable">
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                    $all_users_query = "SELECT * FROM list WHERE role = 'user'";
                    $all_users_result = $mysqli->query($all_users_query);

                    while ($row = $all_users_result->fetch_assoc()) {
                        echo '<tr>';
                        echo '<td>' . $row['fullname'] . '</td>';
                        echo '<td>' . $row['email'] . '</td>';
                        echo '<td>' . $row['role'] . '</td>';
                        echo '<td><a href="#" class="navigation_item" data-id="' . $row['id'] . '">Delete</a></td>';
                        echo '</tr>';
                    }
                    ?>
                </table>
                <a class="buttonhoako" href="user.php">Add User</a>
            </section>





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
    <script src="admin.js"></script>
</body>

</html>