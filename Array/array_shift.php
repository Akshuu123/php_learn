<?php
// remove value starting of array return and remove first element of array
$arr = array('data1', 'data2', 'data3', 'data4');
print_r($arr);

$arr_shift=array_shift($arr);
print_r($arr_shift);