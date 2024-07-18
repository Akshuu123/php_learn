<?php

namespace Fruits;

include './trait-fruit.php';

class Fruit
{
    use \Trait_fruit; //use trait Method in Fruit class

    //Create Properties For Fruit
    public $name;
    public $vitamin;

    const MESSAGE_FRUIT = 'Fruit is Good for Health';

    public function __construct($name, $vitamin)
    {
        $this->name = $name;
        $this->vitamin = $vitamin;
    }

    //Set Fruit Name
    public function set_fruit_name($name)
    {
        $this->name = $name;
    }

    //Get Fruit Name
    protected function get_fruit_name()
    {
        return 'The Name of Fruit is ' . ucfirst($this->name);
    }

    // Set Vitamin
    public function set_vitamin(string $vitamin)
    {
        $this->vitamin = $vitamin;
    }

    //Get Vitamin
    protected function get_vitamin()
    {
        return 'Vitamin ' . ucfirst($this->vitamin)  . ' are in Fruit ' . ucfirst($this->name);
    }
}
