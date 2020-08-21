<?php
require_once('json-form-generator/form.class.php');

function get_db()
{
  $content = file_get_contents('db.json');
  $json_data = json_decode($content);

  return $json_data;
}

function get_db_table($table_name)
{
  $all_db = get_db();

  return $all_db->$table_name;
}

function createForm($formName)
{
  $form = new Form(['file' => "forms/$formName.json"]);

  return $form;
}

function save_db($table_name, $data)
{
  $all_db = get_db();
  $all_db->$table_name = $data;
  $str = json_encode($all_db);
  file_put_contents('db.json', $str);
}

function debug($var)
{
  echo '<pre>';
  var_dump($var);
  echo '</pre>';
}
