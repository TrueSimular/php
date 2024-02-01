<?php
class Human {

    public $first_name; //public, protected, private
    public $last_name;
    public $b_day;
    public $status;

    public function __construct(){
        return $this->status = 0;
    }

    public function calc($x, $y){
        $sum = $x + $y;
        return $sum;
    }

}

$human = new Human;
$human->first_name = 'Lauren';
echo $human->status;
echo "\n";
echo $human->calc(5,6);