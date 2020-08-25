<?php
session_start();

// echo 'Форма была отправлена';

$userName = $_POST['username'];
$userPhone = $_POST['phone'];
$userAddress = $_POST['address'];

file_put_contents('../' . $userPhone . '.txt', $userName . ';' . $userPhone . ';' . $userAddress . PHP_EOL, FILE_APPEND);

$_SESSION['message'] = 'Privet medved!!!';

header('Location: /');