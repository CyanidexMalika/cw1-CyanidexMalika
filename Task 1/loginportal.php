<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login ho.css">
    <script src="https://kit.fontawesome.com/44314c9784.js" crossorigin="anonymous"></script>
    <title>Banking Portal</title>
</head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include 'database.php';
        include 'sendtolist.php';
        include 'forlogindb.php';
    }


    ?>



    <!---------------Login-ko-portal----------->

    <div class="maincontainer">
        <div class="formbox">
            <div class="loginbox" id="login">
                <form action="forlogindb.php" method="POST">
                    <h3>Login</h3>
                    <div class="boxes">
                        <i class="fa-regular fa-envelope fa-fade"></i>
                        <input type="email" class="inputbox" id="loginemail" required>
                        <label for="email">Registered Email</label>
                    </div>
                    <div class="boxes">
                        <i class="fa-solid fa-lock fa-fade"></i>
                        <input type="password" class="inputbox" id="loginpassword" required>
                        <label for="password">Password</label>
                    </div>
                    <div class="rem">
                        <label for="">
                            <input type="checkbox">Remember</label><br>

                    </div>
                    <button>Login</button>
                    <div class="forgetpass">

                </form>
                <a href="#">Forget password?</a>
            </div>
            <div class="registerho">
                Not registered yet? <a href="#">Register</a>
            </div>
        </div>




        <!--------------registerho hai----------------------->

        <div class="registerbox" id="register">
            <form action="sendtolist.php" method="POST">
                <h3>Sign Up</h3>
                <div class="boxes">
                    <i class="fa-regular fa-user fa-fade"></i>
                    <input type="text" class="inputbox" name="username" required>
                    <label for="email">Full Name</label>
                </div>
                <div class="boxes">
                    <i class="fa-regular fa-envelope fa-fade"></i>
                    <input type="email" class="inputbox" name="registeremail" required>
                    <label for="email">Email</label>
                </div>
                <div class="boxes">
                    <i class="fa-regular fa-user fa-fade"></i>
                    <input type="text" class="inputbox" name="gender" required>
                    <label for="gender">Gender</label>
                </div>
                <div class="boxes">
                    <i class="fa-solid fa-lock fa-fade"></i>
                    <input type="password" class="inputbox" name="registerpassword" required>
                    <label for="password">Password</label>
                </div>
                <div class="rem">
                    <label for="">
                        <input type="checkbox" required>Agree with all terms.</label><br>

                </div>
                <button>Signup</button>
                <div class="forgetpass">

            </form>

        </div>

    </div>

    <!--switching for register and login page-->
    <div class="switch">
        <a href="#" class="login" onclick="login1()">Login</a>
        <a href="#" class="register" onclick="register1()">Register</a>
        <div class="btn-active" id="btn"></div>

    </div>
    </div>


    </div>

    <script>

        var a = document.getElementById('login');
        var b = document.getElementById('register');
        var c = document.getElementById('btn');

        function login1() {
            a.style.left = "20px";
            b.style.left = "450px";
            c.style.left = "0px";

        }
        function register1() {
            a.style.left = "-400px";
            b.style.left = "20px";
            c.style.left = "195px";

        }
    </script>

</body>

</html>