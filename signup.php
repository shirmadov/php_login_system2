<?php
include_once 'header.php';
?>


    <div class="container" style="text-align:center">
    <h1>Signup</h1>
    <?php
    if(isset($_GET['error'])){
        if($_GET['error']=='emptyfields'){
            echo '<p style="color:red">Fill in all fields</p>';
        }
        else if($_GET['error']=='invalidmailuid'){
            echo '<p style="color:red">Invalid username or email</p>';
        }
        else if($_GET['error']=='invalidmail'){
            echo '<p style="color:red">Invalid email</p>';
        }
        else if($_GET['error']=='invaliduid'){
            echo '<p style="color:red">Invalid username</p>';
        }
        else if($_GET['error']=='passwordcheck'){
            echo '<p style="color:red">Passwords Not match</p>';
        }else if($_GET['error']=='none'){
            echo '<p style="color:green">Registred Successfully</p>';
        }
    }
    ?>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full Name ... ">
        <input type="text" name="email" placeholder="E-mail ...">
        <input type="text" name="uid" placeholder="Username ...">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password">
        <button class="btn_signup" type="submit" name="submit">Sign Up</button>
    </form>

    <?php
    if(isset($_GET["newpwd"])){
        if( $_GET["newpwd"] == "passwordupdated" ){
            echo '<p>Your password has been reset!</p>';
        }
    }
    ?>

    <a href="reset-password.php">Forgot your password</a>
    </div>

<?php
include_once 'footer.php';
?>