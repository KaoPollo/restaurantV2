<?php

if (isset($_POST["submit"])) {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if(emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=emptyinput");
        exist(); 
    }
    if(invalidUid($username) !== false) {
        header("location: ../signup.php?error=invaliduid");
        exist(); 
    }
    if(invalidEmail($email) !== false) {
        header("location: ../signup.php?error=invalidemail");
        exist(); 
    }
    if(pwdMatch($pwd, $pwdRepeat) !== false) {
        header("location: ../signup.php?error=passwordsdontmatch");
        exist(); 
    }
    if(uidExists($conn, $username, $email) !== false) {
        header("location: ../signup.php?error=usernametaken");
        exist(); 
    }

    createUser($conn, $name, $email, $username, $pwd);

}
else {
    header("location: ../signup.php");
    exist();
}