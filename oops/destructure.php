<?php

namespace Person;

class Person
{
    public $name;
    public $age;
    public $sex;
    public function __construct($name, $age, $sex)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }
    public function __destruct()
    {
        echo 'The name of user is ' . $this->name . 'and script is ending';
    }
}


$first_user = new Person('Akshay', 5, 'Male');
print_r($first_user->__destruct());
