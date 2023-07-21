<?php

if(isset($_POST['submit'])){
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwdRepeat = $_POST['pwdrepeat'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    // emptyInputSignup( $name, $email, $username, $pwd, $pwdRepeat );
    if( emptyInputSignup( $name, $email, $username, $pwd, $pwdRepeat ) !== false ){
        header("Location: ../signup.php?error=emptyinput");
        exit();
    }

    if( invalidUid( $username) !== false ){
        header("Location: ../signup.php?error=invaliduid");
        exit();
    }

    if( invalidEmail( $email ) !== false ){
        header("Location: ../signup.php?error=invalidemail");
        exit();
    }

    if( pwdMatch( $pwd, $pwdRepeat ) !== false ){
        header("Location: ../signup.php?error=pwdnotmatch");
        exit();
    }

    if( uidExists( $conn , $username, $email ) !== false ){
        header("Location: ../signup.php?error=usernametaken");
        exit();
    }

    createUser($conn, $name, $email, $username, $pwd );

    header("Location: ../signup.php?error=usernametaken");
    exit();   

}
else{
    header("location: ../signup.php");
}
