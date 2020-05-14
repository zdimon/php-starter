<?php session_start() ?>
<?php 

echo 'Форма была отправлена!';

// var_dump($_POST);

$username = $_POST['username'];

$usertext = $_POST['usertext'];

file_put_contents('/home/zdimon/html/contact-data.txt', $username.';'.$usertext.PHP_EOL, FILE_APPEND);

$_SESSION['message'] = 'Privet medved!!!';

header('Location: /');



?>