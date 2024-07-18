<?php
include './class-fruit.php'; // Include the Fruit class

use Fruits\Fruit; // Use the Fruit class               

class My_Fruit extends Fruit
{
    // Extend Fruit Class                   
    public $color;
    public $weight;
    public $taste;
    public $origin;
    /**
     * Type of Fruit
     * @var string
     */
    public $type;
    public $nutritionalValue;


    public function __construct(string $name, string $vitamin, string $color, int $weight, string $taste, string $origin, string $type, string $nutritionalValue)
    {
        Parent::__construct($name, $vitamin); //Call Properties of Parent                    
        $this->color = $color;
        $this->weight = $weight;
        $this->taste = $taste;
        $this->origin = $origin;
        $this->type = $type;
        $this->nutritionalValue = $nutritionalValue;
    }
    public function describe_fruit_name()
    {
        return Parent::get_fruit_name();
    }
    public function describe_fruit_vitamin()
    {
        return Parent::get_vitamin();
    }

    // describe fruit message using const in parent class
    public function describe_fruit_message()
    {
        return Parent::MESSAGE_FRUIT;
    }

    // check is this apple
    protected function is_apple()
    {
        if ($this->name == 'apple' && $this->vitamin=='a') {
            return 'Yes this is apple ';
        } else {
            return 'Not This is not apple';
        }
    }
}
