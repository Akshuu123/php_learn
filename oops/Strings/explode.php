<?php
// explode convert string into array
include 'strings.php';

echo $lorem; //this is string

// convert it to array
$exp_arr = explode(' ', $lorem);

print_r($exp_arr);
print_r(array_reverse($exp_arr));