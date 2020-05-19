<?php 
    require_once('libs/json-form-generator/form.class.php');

    function get_db(){
        $content = file_get_contents('db.json');
        $json_data = json_decode($content);  
        return $json_data;
    }

    function get_db_table($table_name){
        $content = file_get_contents('quiz.json');
        $json_data = json_decode($content);    
        return $json_data->$table_name;
    }

    function save_db($table_name, $data){
        $db = get_db();
        $db->$table_name = $data;
        $str = json_encode($db);
        file_put_contents('db.json',$str);
    }

    function debug($var) {
        echo '<pre>';
        var_dump($var);
        echo '</pre>';
    }

    function getForm($formname) {
        $form = new Form(['file'=>"forms/$formname.json"]);
        return $form;
    }


?>