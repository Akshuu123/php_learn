<?php
// push means add value from end of a array
$arr = ['firstval','secondval','thirdval'];
print_r($arr);

$arr_push=array_push($arr,'updatedvalue');
print_r($arr_push); //return no of value
print_r($arr);