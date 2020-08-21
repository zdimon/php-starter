<?php
session_start();

$userName = $_POST['username'];
$password = $_POST['password'];

if ($userName === 'pkv' && $password === '123456') {
  $_SESSION['loginUser'] = $userName;
} else {
  $_SESSION['message'] = 'Неверное имя пользователя или пароль';
}


header('Location: /');