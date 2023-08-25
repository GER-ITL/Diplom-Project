<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$psw = filter_var(trim($_POST['psw']),
FILTER_SANITIZE_STRING);


$mysql = new mysqli("localhost", "root", "root", "register-bd","8889");

$result = $mysql->query("SELECT * FROM `users-profile` WHERE `login` = '$login' AND `psw` = '$psw'");
$user = $result->fetch_assoc();
if(count($user) == 0){
    echo 'Такой пользователь не найден';
    exit();
}

setcookie('user', $user['name'], time() + 3600, "/" );

$mysql->close();    

header('Location: index6.php');


?>