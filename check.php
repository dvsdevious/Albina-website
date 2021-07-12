<?php
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']),
FILTER_SANITIZE_STRING);

if(mb_strlen($name) < 5 || mb_strlen($name)>50) {
    echo"Недопустимая длина";
    exit();
    } else if(mb_strlen($login) < 5 || mb_strlen($login) > 90) {
        echo "Недопустимая длина";
        exit();
    } else if(mb_strlen($password) < 5 || mb_strlen($password) > 6) {
        echo "Недопустимая длина";
        exit();
    }

    $pass = md5($pass,"dvsbmbls@123");

    $conn = mysqli_connect('localhost', 'albinajo_dvsdevious', 'firstwebsite@123','albinajo_registeredusers');
    if ($conn === false) {
    die("Ошибка: " . mysqli_connect_error());
    } 
    echo "Подключение успешно установлено";
    mysqli_close($conn);

    $mysql->query("INSERT INTO `users` (`login`, `name`, `password`) VALUES('$name','$login','$password')");

    $mysql->close();

    header('Location:index.html');
?>