<?php 

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdRepeat = $_POST["pwdrepeat"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputsSignup($name, $email, $username, $pwd, $pwdRepeat) !== false) {
    header("location: http://www.albina-jolokia.com?error=emptyinput");
    exit();
    }
    if (invalidEmail($email) !== false) {
    header("location: http://www.albina-jolokia.com?error=invalidemail");
    exit();
    }
    if (invalidUid($username) !== false) {
    header("location: http://www.albina-jolokia.com?error=invaliduid");
    exit();
    }
    if (pwdMatch($pwd, $pwdRepeat) !== false) {
    header("location: http://www.albina-jolokia.com?error=passwordsdontmatch");
    exit();
    }
    if (uidExists($conn, $username, $email) !== false) {
    header("location: http://www.albina-jolokia.com?error=usernametaken");
    exit();
    }

    createUser($conn, $name, $email, $username, $pwd);
}
else {
    header("location: http://www.albina-jolokia.com");
    exit();
}
?>
