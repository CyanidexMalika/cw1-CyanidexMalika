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
            <img src="money.png" alt="" class="moneylogo">
            <a href="#" class="hacker">HackersBank</a>

            <ul class="navigation">
                <li class="navigationkolist">
                    <a href="#homeho" style="--clr:1s" class="navigation_item" class="active">Home</a>
                    <a href="#serviceho" style="--clr:2s" class="navigation_item">Services</a>
                    <a href="#aboutho" style="--clr:3s" class="navigation_item">About</a>
                    <a href="#contact" style="--clr:4s" class="navigation_item">Contact</a>
                </li>
            </ul>
            <button class="button" id="form-open">Login</button>
        </nav>
    </header>


    <section class="home" id="homeho">
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

                    <div class="login_signup black">Don't have an account? <a href="#" id="signup">Signup</a>
                    </div>
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
            <h1>Welcome User</h1>
            <h3>Secure <span class="colortospan"></span></h3>
            <p>At HackersBank, we redefine banking for the digital age. Our mission is to provide you with a secure and
                seamless banking experience that fits your modern lifestyle. Whether you're a tech-savvy individual or
                just starting your financial journey, we have the tools and services to support your needs.</p>
            <h3>Secure Your Finances</h3>
            <h3>Easy Access, Anytime</h3>
            <h3>Personalized Solutions</h3>
            <h3>Expert Support</h3>

        </div>
        <div class="logohacker">
            <img src="hackericon.png" alt="">
        </div>
    </section>
    <section class="aboutsection" id="aboutho">
        <div class="aboutimage">
            <img src="3hacker.png" alt="">
        </div>

        <div class="abouttext">
            <h2 class="aboutheading">About <span class="colortospan">Us</span></h2>
            <h3>Bank Services</h3>
            <p>At HackersBank, we're more than just a financial institution, we're your dedicated partner on your
                financial journey. Our commitment is to provide you with innovative solutions, personalized support, and
                a seamless banking experience that empowers you to achieve your financial goals.</p>
            <h3>Join Us Today</h3>
            <p>Experience banking that revolves around you, offering security, convenience, and the power to achieve
                your financial dreams!</p>

        </div>

    </section>
    <section class="service" id="serviceho">
        <h2 class="aboutheading">Our <span class="colortospan">Services</span></h2>
        <div class="servicekosection">
            <div class="servicebox">
                <h3>Secure Investment Services</h3>
                <p>Our Investment Services offer you the opportunity to grow your wealth, achieve your financial goals,
                    and secure a brighter future. Whether you're planning for retirement, saving for a major purchase,
                    or aiming to increase your financial assets, our investment solutions are designed to suit your
                    needs.
                </p>
            </div>
            <div class="servicebox">
                <h3>Mobile Banking</h3>
                <p> With our mobile app, you can manage your finances on the go. From checking your account balance to
                    transferring funds, paying bills, and even depositing checks – everything is just a tap away. Enjoy
                    the ease of banking right from your mobile device, ensuring your financial transactions are safe,
                    fast, and hassle-free. Download our app now and experience the future of banking at your fingertips.
                </p>
            </div>
            <div class="servicebox">
                <h3>Debit/Credit card</h3>
                <p>Discover the convenience and versatility of our Debit and Credit Cards, designed to simplify your
                    financial transactions and enhance your spending experience. Whether you're shopping online, dining
                    out, or traveling the world, our cards provide you with seamless payment options and valuable
                    benefits.
                </p>
            </div>
        </div>
    </section>
    <footer>
        <section class="contact" id="contact">
            <h2 class="aboutheading">Contact <span class="colortospan">Us<span></h2>
            <form action="#" class="footerform">
                <div class="contactform">
                    <input type="email" class="contactinput" placeholder="Enter your email">
                    <input type="text" class="contactinput" placeholder="Enter your Fullname" required>

                </div>
                <div class="contactform">
                    <input type="tel" class="contactinput" placeholder="Enter your email">
                    <input type="text" class="contactinput" placeholder="Subject">
                </div>
                <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                <input type="Submit" value="Submit enquiry" class="button">

            </form>

            <div class="copyright">
                <p>Copyright@2023 by HackersBank || All Rights Reserved</p>
            </div>

        </section>
    </footer>



    <script src="script.js"></script>
    <script src="register.js"></script>
    <script src="query.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="typed.js"></script>
    <script>
        var typed = new Typed('.colortospan', {
            strings: ["Banking Platform", "Easy Acess", "Worldwide Platform"],
            typeSpeed: 100,
            backSpeed: 100,
            backDelay: 1000,
            loop: true
        });
    </script>
</body>

</html>