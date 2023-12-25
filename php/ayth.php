<?php

$login = $_POST['login'];
$pass = $_POST['pass'];

$sql = new mysqli('localhost','root', '', 'php');
$result = $sql -> query("SELECT * FROM users WHERE login='$login' AND password='$pass'");
$data = $result -> fetch_assoc();

if(empty($data)){
echo "Введен неверный логин или пароль";

} else{
$sql -> close();
header('Location:hello.php');
}