<?php
session_start();
chdir('..');
require_once('libs/app.php');

$userName = $_POST['username'];
$password = $_POST['password'];

$json_data = get_db_table('users');

$login = false;

foreach ($json_data as $user) {
  if ($user->username === $userName  && $user->password === $password) {
    $login = true;
    $_SESSION['loginUser'] = $userName;
    break;
  }
}

if (!$login) {
  $_SESSION['message'] = 'Неверное имя пользователя или пароль';
}


header('Location: /');