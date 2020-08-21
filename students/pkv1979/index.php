<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wezom Academy PHP</title>

  <link href="./node_modules/material-components-web/dist/material-components-web.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link href="./css/style.css" rel="stylesheet">
</head>

<body>
  <?php include 'menu.php' ?>

  <div id="main-content">
    <?php
      $page = 'pages/' . str_replace('/', '', $_SERVER['REQUEST_URI']) . '.php';
      if (file_exists($page)) {
        include $page;
      } else {
        include 'pages/main-page.php';
      }
    ?>

    <?php if (array_key_exists('message', $_SESSION)): ?>
    <div style="width: 100px; height: 100px; background: red;">
      <?php 
        echo $_SESSION['message'];
        unset($_SESSION['message']);
      ?>
    </div>
    <?php endif ?>
  </div>

  <script src="./node_modules/material-components-web/dist//material-components-web.min.js"></script>
  <script src="./js/main.js"></script>
</body>

</html>