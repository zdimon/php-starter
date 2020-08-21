<?php
chdir('..');
require_once('libs/app.php');

// debug($_POST);
$portfolio = get_db_table('portfolio');
$portfolio[] = array('firstName' => $_POST['firstName']);
// debug($portfolio);
save_db('portfolio', $portfolio);

header('Location: /');