<?php
class Person
{
    public $firstName;
    public $lastName;
    public $age;
    public $gender;

    public function __construct($firstName, $lastName, $age, $gender)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->gender = $gender;
    }
    public function displayDetails(){
        if ($this->gender=='male') {
            return "His name is {$this->firstName} {$this->lastName} and he  is {$this->age} year old ";
        }else{
            return "Her name is {$this->firstName} {$this->lastName} and she  is {$this->age} year old ";
        };
        
    }
}
?>