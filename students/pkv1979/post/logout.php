<?php
session_start();

if (array_key_exists('loginUser', $_SESSION)) {
  unset($_SESSION['loginUser']);
}

header('Location: /');