<?php
// add new element of array from starting
$arr = array('user1', 'user2', 'user3', 'user4');
print_r($arr);

$arr_unshift = array_unshift($arr, 'updateduser');
print_r($arr_unshift);
print_r($arr);