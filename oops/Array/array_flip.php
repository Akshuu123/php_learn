<?php
// array flip key to value
$person = array(
    'firstName' => 'Akshay',
    'lastName' => 'Chauhan',
    'village' => 'Rehan',
    'tehsil' => 'Fatehpur',
    'distt' => 'kangra'
);
print_r($person);

// flipmethod
$flip_arr = array_flip($person);
print_r($flip_arr);
