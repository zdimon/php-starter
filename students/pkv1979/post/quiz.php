<?php
session_start();

$json_data = get_db_table('quiz');

$result = '';

foreach ($json_data as $item) {
  if (is_array($_POST[$item->name])) {
    foreach ($_POST[$item->name] as $par) {
      $result .= "<p>$par</p>";
    }
  } else {
    $result .= "<p>" . $_POST[$item->name] . "</p>";
  }
}

$_SESSION['message'] = 'Спасибо за то что приняли участие в викторине!';

header('Location: /');