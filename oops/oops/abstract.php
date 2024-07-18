<?php

// Define an abstract class Animal
/**
 * Abstraction Matlab abstract class directly access nahi kar sakte, 
 * we should have to derived new class from parent class to use their method
 */
abstract class Animal {
    protected $name;

    // Constructor
    public function __construct($name) {
        $this->name = $name;
    }

    // Abstract method
    abstract public function sound();
}

// Define a subclass Dog that extends Animal
class Dog extends Animal {
    // Implementing the abstract method
    public function sound() {
        return "Woof!";
    }
}

// Define another subclass Cat that extends Animal
class Cat extends Animal {
    // Implementing the abstract method
    public function sound() {
        return "Meow!";
    }
}

// Create instances of Dog and Cat
$dog = new Dog("Buddy");
$cat = new Cat("Whiskers");

// Call the sound method on each object
echo $dog->sound();


