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
                    <a href="#" class="navigation_item">Services</a>
                    <a href="#" class="navigation_item">About</a>
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
        <div class="homekodescription">
            <h1>Welcome Hackers</h1>
            <h3>Secure <span class="colortospan">Banking Platform</span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit explicabo alias dolore, debitis delectus
                deserunt
                consequuntur tenetur adipisci ab minima voluptas recusandae quae atque voluptate laborum nihil
                asperiores
                libero
                soluta.</p>
        </div>
        <div class="logohacker">
            <img src="hackericon.png" alt="">
        </div>
    </section>
    <section class="aboutsection">
        <div class="aboutimage">
            <img src="3hacker.png" alt="">
        </div>

        <div class="abouttext">
            <h2 class="aboutheading">About <span class="colortospan">Us</span></h2>
            <h3>Bank Services</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit explicabo alias dolore, debitis delectus
                deserunt
                consequuntur tenetur adipisci ab minima voluptas recusandae quae atque voluptate laborum nihil
                asperiores
                libero
                soluta.</p>

        </div>

    </section>
    <section class="service">
        <h2 class="aboutheading">Our <span class="colortospan">Services</span></h2>
        <div class="servicekosection">
            <div class="servicebox">
                <h3>Secure Banking</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, mollitia earum. Ab autem nostrum sunt
                    blanditiis eaque ullam quod minus magnam ad ipsam sed facere praesentium, fuga eveniet sequi
                    possimus.
                </p>
            </div>
            <div class="servicebox">
                <h3>Mobile Banking</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, mollitia earum. Ab autem nostrum sunt
                    blanditiis eaque ullam quod minus magnam ad ipsam sed facere praesentium, fuga eveniet sequi
                    possimus.
                </p>
            </div>
            <div class="servicebox">
                <h3>Debit/Credit card</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, mollitia earum. Ab autem nostrum sunt
                    blanditiis eaque ullam quod minus magnam ad ipsam sed facere praesentium, fuga eveniet sequi
                    possimus.
                </p>
            </div>
        </div>
    </section>
    <footer>
        <section class="contact" id="contact">
            <h2 class="aboutheading">Contact <span class="colortospan">Us<span></h2>
            <form action="#" class="footerform">
                <div class="contactform">
                    <input type="email" placeholder="Enter your email">
                    <input type="text" placeholder="Enter your Fullname" required>

                </div>
                <div class="contactform">
                    <input type="tel" placeholder="Enter your email">
                    <input type="text" placeholder="Subject">
                </div>
                <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                <input type="Submit" value="Submit enquiry" class="button">

            </form>

        </section>
    </footer>



    <script src="script.js"></script>
    <script src="register.js"></script>
</body>

</html>