<?php

use LDAP\Result;

$login = $_POST['login-log'];
$pass = $_POST['pass-log'];

$mysql = new mysqli('localhost', 'root', '','telefon');

$result = $mysql->query("SELECT * FROM users WHERE login='$login' AND password='$pass'");
$user = $result->fetch_assoc();

if(empty($user)){
    echo "Введен неверный логин или пароль";
}else{
    $mysql->close();
    header('Location: hello.php');
}

?>