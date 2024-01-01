<?php
require("admincon.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <title>Admin login</title>
</head>
<body>
    <img src="css/images/Rajalakshmi_Engineering_College_(REC)_Chennai_Logo.jpg" alt="">
    <div class="head">
        <div>
            <h1 class="clgname">Rajalakshmi Engineering College</h1>
        </div>
        <h2 class="dept">Department of Mechanical Engineering</h2>
    </div>
    <div class="container">
        <form   method="POST">
            <h1 class="adhead">Admin Login</h1>
            <div class="ip">
                    <input class="name" type="text" placeholder="Enter your name" name="adminname">
                    <!--<input class="mail" type="email" placeholder="Enter your email">-->
                    <input  class="pass" type="password" placeholder="Enter your password" name="adminpass">
            </div>
            <button name="signin" class="btn">Sign in</button>
            <p class="or">Or</p>
            <button onclick="redirect()" class="btn2">Student Login</button>
        </form>
    </div>

    <?php

    if(isset($_POST['signin']))
    {
        $query= "SELECT * FROM `admindet` WHERE `name`='$_POST[adminname]' AND `pass`='$_POST[adminpass]'";
        $result=mysqli_query($conn,$query);

        if(mysqli_num_rows($result)==1){
            session_start();
            $_SESSION[`adminloginid`]=$_POST['adminname'];
            header("location: upload.php");
        }
        else{
            echo "<script>alert('Incorrect password');</script>";
        }
    }
    ?>

    <script>
        function redirect(){
            window.open("login.php");
        }
    </script>
</body>
</html>