<?php 


class Animal {
    static function create_one(){
        echo 'Creating an animal';
        return new Animal();
    }

    private function jump(){
        echo 'bum-bum';
    }

    public function move() {
        $this->jump();
        echo 'top-top-top';
    }
}


?>