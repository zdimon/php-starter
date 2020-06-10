<?php 
namespace DimaNameSpace;

class User {

    public $name = 'Dima';

    public function say_name(){
        return $this->name;
    }

    static function create_user(){
        $user = new User();
        return $user;
    }

}

?>