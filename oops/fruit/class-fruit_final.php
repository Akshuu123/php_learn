<?php

include './class-fruit_extend.php';

final class Fruit_Final extends My_Fruit
{
    private $price;  //Private Property
    public function __construct(string $name, string $vitamin, string $color, int $weight, string $taste, string $origin, string $type, string $nutritionalValue, int $price)
    {
        Parent::__construct($name,  $vitamin,  $color, $weight,  $taste,  $origin,  $type,  $nutritionalValue);
        $this->price = $price;
    }

    // Check this  is apple
    public function is_real_apple()
    {
        return Parent::is_apple();  
    }

    // Get Fruit Price
    public function get_fruit_price()
    {
        return $this->price;
    }

    // Check it is cheap or not
    public function is_cheap()
    {
        if (self::get_fruit_price() <= 100) {
            return 'This is Cheap';
        } else {
            return 'This is Not Cheap';
        }
    }
}


$fruit = new Fruit_Final('apple', 'a', 'red', 10, 'sweet', 'india','fruit', 'High', 10);
print_r($fruit->is_cheap());
