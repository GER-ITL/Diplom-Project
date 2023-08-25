<?php
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$name = filter_var(trim($_POST['name']),
FILTER_SANITIZE_STRING);
$psw = filter_var(trim($_POST['psw']),
FILTER_SANITIZE_STRING);
 if(mb_strlen($login)<5 ||mb_strlen($login)>90 ){
     echo'Недопустимая длина логина';
     exit();
    }  else if(mb_strlen($name)<3 ||mb_strlen($name)>50 ){
    echo'Недопустимая длина имени';
    exit();
    } else if(mb_strlen($psw)<2 ||mb_strlen($psw)>16 ){
        echo'Недопустимая длина пароля (от 2 до 16 символов)';
        exit();
     } 

    $mysql = new mysqli("localhost", "root", "root", "register-bd","8889");
    $mysql->query("INSERT INTO `users-profile` (`login`, `name`, `psw`) 
    VALUES('$login', '$name', '$psw')");

    $mysql->close();    
    header('Location: index5.html');
?>