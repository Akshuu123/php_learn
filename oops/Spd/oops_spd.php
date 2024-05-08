<?php
// Spedd distance time with oops
class Speeddistance
{
    public $time;
    public $distance;
    public $speed;
    public function __construct($time, $distance, $speed)
    {
        $this->time = $time;
        $this->distance = $distance;
        $this->speed = $speed;
    }
    /** This method is used for get speed in simple km/h form*/
    public function get_speed()
    {
        return 'Speed is equal to ' . $this->distance % $this->time . ' km/h';
    }
    public function check_custom_speed($distance, $time)
    {
        return $distance % $time . ' km/h';
    }
    /** This medhot is used for get distance in simple km form */
    public function get_distance()
    {
        return 'The distance is ' . $this->time * $this->speed . 'Km';
    }
    public function check_custom_distance($time, $speed)
    {
        return 'The distance is ' . $time * $speed . ' km ';
    }
    /**THis method is used for get time  in Hour fomr */
    public function get_time()
    {
        return ' The time is ' . $this->distance % $this->speed . ' hour';
    }
    public function check_custom_time($distance, $speed)
    {
        return ' The time is ' . $distance % $speed . ' hour';
    }
}

// 
$speed = new Speeddistance('1000', '10', '15');
// print_r($speed->get_speed());