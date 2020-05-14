<?php session_start() ?>
<!doctype html>

<html lang="en">
    <head>
      <meta charset="utf-8">

      <title>My super-puper web-site</title>
      <meta name="description" content="bla bla bla">
      <meta name="author" content="zdimon77@gmail.com">

      <link href="/node_modules/material-components-web/dist/material-components-web.min.css" rel="stylesheet">
      <script src="/node_modules/material-components-web/dist/material-components-web.min.js"></script>

      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
      <link href="/main.css" rel="stylesheet">
    </head>

    <body>

    <?php include 'menu.php' ?>

        
    <div id="main-content">

        <?php 
            $page = str_replace('/','',$_SERVER['REQUEST_URI']);  
            if (file_exists('pages/'.$page.'.php')) {
                include 'pages/'.$page.'.php';
            } else {
                include 'pages/main-page.php';
            }

       
            
            
        ?>



        <?php if (array_key_exists('message',$_SESSION)) : ?>
            <div style="width: 100px; height: 100px; background: red">
            
                <?php 
                
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);

                ?>
            
            </div>

        <?php endif ?>

        
       
    </div>

      
    </body>
</html>
