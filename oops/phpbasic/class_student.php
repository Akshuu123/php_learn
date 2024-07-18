<?php
include 'class_person.php';
class Student extends Person
{
    private $studentId;

    public function __construct($firstname, $lastname, $age, $gender, $email, $studentId)
    {
        parent::__construct($firstname, $lastname, $age, $gender);
        // $this->studentId = $studentId;
        $this->studentId = $age;  //idhar mai id ko age assign kr diya
        $this->email = $email;
    }
    public function alldetails()
    {
        return parent::displayDetails() . "and my email is {$this->email} and id is {$this->studentId} ";
    }
}
