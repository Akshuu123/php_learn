<?php
require_once 'oops_spd.php';

class Inheritancespd extends Speeddistance
{
    public $vehiclename;
    public function __construct($time, $distance, $speed, $vehiclename)
    {
        $this->time = $time;
        $this->distance = $distance;
        $this->speed = $speed;
        $this->vehiclename = $vehiclename;
    }

    public function set_vehiclename($vehiclename)
    {
        return $this->vehiclename = $vehiclename;
    }
    public function get_vehiclename()
    {
        return ' The name of car is ' . $this->vehiclename;
    }
}


$car = new Inheritancespd(200, 200, 50, 'Duster');
// print_r($car);
$class_methods = get_class_methods('Inheritancespd');
print_r($class_methods);
$car->set_vehiclename('Tata Nano');
print_r($car->get_vehiclename());