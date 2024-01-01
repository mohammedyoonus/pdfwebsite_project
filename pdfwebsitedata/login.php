<?php
session_start();
include("dblog.php");
include("signin.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['name'];
    $mail = $_POST['email'];
    $pass = $_POST['pass'];

    if (!empty($mail) && !empty($pass) && !is_numeric($mail)) {
        $query = "insert into formdet(name,email,pass) values('$username','$mail','$pass')";
        mysqli_query($conn, $query);
        echo "<script type='text/javascript'> alert('Successfully regsistered')</script>";
    } else {
        echo "<script type='text/javascript'> alert('Please enter valid information')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <title>Student Login</title>
</head>

<body>
    <img src="css/images/Rajalakshmi_Engineering_College_(REC)_Chennai_Logo.jpg" alt="">
    <div class="head">
        <div>
            <h1 class="clgname">Rajalakshmi Engineering College</h1>
        </div>
        <h2 class="dept">Department of Mechanical Engineering</h2>
    </div>

    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="POST">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input name="name" type="text" placeholder="Name">
                <input name="email" type="email" placeholder="Email">
                <input name="pass" type="password" placeholder="Password">
                <button>Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="POST">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input name="email2" type="email" placeholder="Email">
                <input name="pass2" type="password" placeholder="Password">
                <a href="#">Forget Your Password?</a>
                <button onclick="signin()">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                    <p>Or</p>
                    <a class="adminlog" href="admin.php">Admin Login</a>

                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                    <p>Or</p>
                    <a class="adminlog" href="admin.php">Admin Login</a>
                </div>
            </div>
        </div>
    </div>

    <script src="javsc.js"></script>
</body>

</html>