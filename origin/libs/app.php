<?php 
require_once('json-form-generator/form.class.php');

function get_db(){
    $content = file_get_contents('db.json');
    $json_data = json_decode($content);
    return $json_data;
}

function get_db_table($table_name){
    $all_db = get_db();
    return $all_db->$table_name;
}

function createForm($formname){
    $form = new Form(['file'=>"forms/$formname.json"]);
    return $form;
}

function save_db($table_name, $data){
    $all_db = get_db();
    $all_db->$table_name = $data;
    $str = json_encode($all_db);
    file_put_contents('db.json',$str);
}

function debug($var){
    echo '<pre>';
    var_dump($var);
    echo '</pre>';
}

function db_connect(){
    $link = mysqli_connect("127.0.0.1", "root", "123", "test");

    if (!$link) {
        echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
        echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
        echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
    
    // echo "Соединение с MySQL установлено!" . PHP_EOL;
    // echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;
    
    // mysqli_close($link);
    return $link;
}

function create_tables(){
    $link = db_connect();
    $queryCreateUsersTable = "CREATE TABLE IF NOT EXISTS `USERS` (
        `ID` int(11) unsigned NOT NULL auto_increment,
        `EMAIL` varchar(255) NOT NULL default '',
        `PASSWORD` varchar(255) NOT NULL default '',
        PRIMARY KEY  (`ID`)
    )";

    $rezult = mysqli_query($link,$queryCreateUsersTable);
    debug($rezult);
}

function create_users() {
    $link = db_connect();

    foreach (range(1, 100000) as $i) {
        $username = "$i-user";
        $sql = " INSERT INTO USERS (EMAIL, PASSWORD)
        VALUES ('$username', '111') 
        ";
        
        $rezult = mysqli_query($link,$sql);
        debug($rezult); 
    }
   
}

function delete_users() {
    $link = db_connect();


        $sql = " DELETE FROM USERS WHERE ID>100";
        
        $rezult = mysqli_query($link,$sql);
        debug($rezult); 
    
   
}

function select_users(){
    $link = db_connect();
    $sql = "SELECT * FROM USERS WHERE ID<51";
    $rezult = mysqli_query($link,$sql);
    return $rezult;
}


?>