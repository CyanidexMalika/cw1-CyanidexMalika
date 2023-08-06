<?php
include "login.php";
include "inserting.php";


?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website with Login & Registration Form</title>
    <link rel="stylesheet" href="style.css" />

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
</head>

<body>
    <header class="head">
        <nav class="navigationbarho">
            <a href="#" class="hacker">HackersBank</a>

            <ul class="navigation">
                <li class="navigationkolist">
                    <a href="#" class="navigation_item">Home</a>
                    <a href="#" class="navigation_item">Product</a>
                    <a href="#" class="navigation_item">Services</a>
                    <a href="#" class="navigation_item">Contact</a>
                </li>
            </ul>
            <button class="button" id="form-open">Login</button>
        </nav>
    </header>


    <section class="home">
        <div class="form_container">
            <i class="uil uil-times form_close"></i>
            <!-- Login ya dekhi start ho-->
            <div class="form login_form">
                <form action="login.php" method="post">
                    <h2>Login</h2>

                    <div class="input-group">
                        <input type="text" id="email1" name="loginemail" placeholder="Enter your email"
                            onkeyup="Emailloginvalidation()">
                        <i class="uil uil-envelope-alt email"></i>
                        <span id="error7"></span>
                    </div>
                    <div class="input-group">
                        <input type="password" id="password2" name="loginpassword" placeholder="Enter your password">
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>

                    <div class="option_field">
                        <span class="checkbox">
                            <input type="checkbox" id="check" required>
                            <label for="check">Remember me</label>
                        </span>
                        <a href="#" class="forgot_pw">Forgot password?</a>
                    </div>

                    <button onclick="return Loginvalidation()" class="button">Login Now</button>

                    <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a></div>
                </form>
            </div>

            <!-- Signup ko ya dekhi ho-->
            <div class="form signup_form">
                <form action="inserting.php" method="POST">
                    <h2>Signup</h2>

                    <div class="input-group">

                        <input type="text" id="Fname" name="username" placeholder="Enter your FullName"
                            onkeyup="Namevalidation()">
                        <i class="uil uil-user email"></i>
                        <span id="error1"></span>
                    </div>
                    <div class="input-group">
                        <input type="text" id="Email" name="email" placeholder="Enter your email"
                            onkeyup="Emailvalidation()">
                        <i class="uil uil-envelope-alt email"></i>
                        <span id="error3"></span>
                    </div>
                    <div class="input-group">
                        <input type="text" id="Gender" name="gender" placeholder="Enter your Gender"
                            onkeyup="Gendervalidation()">
                        <i class="uil uil-user email"></i>
                        <span id="error4"></span>

                    </div>
                    <div class="input-group">
                        <input type="password" id="Password" name="password" placeholder="Create password"
                            onkeyup="Passwordvalidation()">
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                        <span id="error2"></span>
                    </div>

                    <button class="button" onclick="return Formvalidation()">Submit</button>

                    <div class="logintosignup">Already have an account? <a href="#" id="login">Login</a></div>
                </form>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
    <script src="register.js"></script>
</body>

</html>