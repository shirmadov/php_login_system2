<?php
include_once 'header.php';
?>


    <div class="container" style="text-align:center">
    <h1>Login</h1>
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username/Email ...">
        <input type="password" name="pwd" placeholder="Password">
        <button class="btn_signup" type="submit" name="submit">Log In</button>
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