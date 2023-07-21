<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <nav>
        <div class="wrapper">
            <a style="display:inline-block; text-decoration: none;color:#ffff; font-weight:700" href="index.php">Sblog</a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="discover.php">About Us</a></li>
                <li><a href="blog.php">Find Blogs</a></li>
                
                <?php
               
                if(isset($_SESSION["userUid"])){
                    echo '<li><a href="profile.php">Profile page</a></li>';
                    echo '<li><a href="includes/logout.inc.php">Log Out</a></li>';
                }else{ 
                    echo '<li><a href="signup.php">Sign Up</a></li>';
                    echo '<li><a href="login.php">Log In</a></li>';
                }
                ?>
                <!-- <li><a href="signup.php">Sign Up</a></li>
                <li><a href="login.php">Log in</a></li> -->
            </ul>
        </div>

    </nav>

    <div class="header" style="margin-top:100px">
        <div class="container" style="text-align:center">
            <h2>Login System Php example</h2>
            <?php
               
               if(isset($_SESSION["userUid"])){
                   echo '<h3 style="">You are welcome '.strtoupper($_SESSION["userUid"]).'</h3>';
               }
               ?>
            <p>How To Create A Login System In PHP For Beginners | Procedural MySQLi | PHP Tutorial</p>
        </div>

    </div>