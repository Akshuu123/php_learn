<?php
class FoodItem {
    public $name;
    public $price;
    public $description;
    public $calories;

    public function __construct($name, $price, $description, $calories) {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->calories = $calories;
    }

    public function displayDetails() {
        return "Name: {$this->name}, Price: \${$this->price}, Description: {$this->description}, Calories: {$this->calories}";
    }
}

