<?php 
    chdir('..');
    require_once('libs/app.php');
    // debug($_POST);
    $db = get_db_table('portfolio');
    $db[] = array('firstName' => $_POST['firstName']);
    debug($db);
    save_db('portfolio',$db)
?>