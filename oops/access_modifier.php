<?php

/** 
 * This is Public Access Modifer
 */
class Player
{
    public $player_name;
    public $player_mode;
    public $gender;
    public function __construct($player_name, $player_mode, $gender)
    {
        $this->player_name = $player_name;
        $this->player_mode = $player_mode;
        $this->gender = $gender;
    }
    public function get_mode()
    {
        return 'The mode is' . $this->player_mode;
    }
}

$akshay = new Player('Akshay', 'FPP', 27);
print_r($akshay);  //created access modifier public
$akshay->player_name = 'Updated Name';
print_r($akshay);


// Derive From Parent Class 
