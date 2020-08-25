<?php
session_start();
chdir('..');
require_once('libs/app.php');

$userName = $_POST['username'];
$password = $_POST['password'];
// $confirmPassword = $_POST['confirmpassword'];

$json_data = get_db_table('users');

$userExists = false;

foreach ($json_data as $user) {
  if ($user->username === $userName) {
    $userExists = true;
    $_SESSION['message'] = 'Такой пользователь уже существует';
    break;
  }
}

if (!$userExists) {
  save_db('users', $_POST);
  $_SESSION['message'] = 'Регистрация прошла успешно';
}


header('Location: /');