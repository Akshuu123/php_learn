
<?php

class Personn
{
    public $name;
    public $age;
    public $gender;
    public function __construct($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    public function full_detail()
    {
        return "Name of person is " . $this->name . " and age is " . $this->age . " and gender is " . $this->gender;
    }
}

// extend functionality using new class userr
class Userraddress extends Personn{
    
}




$formdata = $_POST;
$namee = $formdata['name'] = 'akshay';
$agee = $formdata['age'] = 45;
$gender = $formdata['gender'] = 'male';


$person = new Personn($namee, $agee, $gender);
print_r($person->age . "\n");
// print_r($person);
print_r($person->full_detail());
