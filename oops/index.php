<?php

namespace Person;

class Person
{
  public $name;  //this ia access modifier PUBLIC
  public $age;
  public $gender;
  // construct property with php
  public function __construct($name, $age, $gender)
  {
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
  }
  // methods
  public function get_info()
  {
    return "My name is " . $this->name . " my age is " . $this->age . " and my gender is " . $this->gender;
  }
  public function set_name($name)
  {
    return
      $this->name = $name;
  }
}


// this is instance
$result = new Person('akshay', 15, 'Male');

print_r($result->set_name('User'));

print_r($result->get_info()); ?>

<br>
<?php
echo 'hi my name is akshay';

class Goodbye
{
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!"; //using const in class
  public function byebye()
  {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>
<?php
class User
{
  public $firstname;
  public $lastname;
  public $age;
  public function __construct($firstname, $lastname, $age)
  {
    $this->firstname = $firstname;
    $this->lastname = $lastname;
    $this->age = $age;
  }
  // method
  function get_user_info()
  {
    return 'My name is ' . $this->firstname . ' ' . $this->lastname . ' and my age is ' . $this->age;
  }
  function set_user_info($firstname, $lastname, $age)
  {
    return 'ok new user name is ' . $this->firstname . ' ' . $this->lastname . ' and my age is ' . $this->age;
  }
}
$firstname = new User('akshay', 'chauhan', 15);



print_r($firstname->get_user_info());
$change = $firstname->set_user_info('lakshay', 'chauhan', 25);
// print_r($changed);
print_r($firstname->get_user_info() . ' yes this is right');
