<?php 

class Card {

    public $number = '1234567';
    private $balance = 0;

    public function get_balance(){
        return $this->balance;
    }

    public function add_balance($sum) {
        if($sum<1000) { 
            $this->make_transaction($sum);
        } else {
            echo 'fuck off';
        }
    }

    private function make_transaction($sum) {
        $this->balance = $this->balance + $sum;
    }

}

?>