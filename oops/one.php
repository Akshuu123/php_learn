<?php
class Fruit{
    public $name;
    public $vitamin;
    public function __construct($name,$vitamin) {
        $this->name =$name;
        $this->vitamin =$vitamin;
    }
    public function get_fruit_name(){
        return $this->name;
    }

}
echo '<pre>';
$apple=new Fruit('apple','A');
print_r($apple->get_fruit_name());

