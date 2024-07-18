<?php
/**
 * Create custom class Person 
 */
abstract class Person
{
    public $name;
    public $age;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    abstract public function info();
}

/**
 * Extend Person class
 */
class Male extends Person
{

    public function info()
    {
        return 'The name of male is ' . $this->name . ' and age is ' . $this->age;
    }
}

class Female extends Person{
    public function info()
    {
        return 'The name of female is '.$this->name.' and age is  '.$this->age;
    }
}

$akshay=new Male('Akshay',26);
print_r($akshay->info() ."\n");


$vishal= new Female('vishal',18);
print_r($vishal->info());