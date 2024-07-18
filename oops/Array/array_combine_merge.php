<?php
// combine first argument is [key] , second argument for value
$arg1 = array('firtname', 'lastname', 'age', 'state');
$arg2 = array('akshay', 'chauhan', 27, 'hp');


$arr_comb = array_combine($arg1, $arg2);
print_r($arr_comb);


//merge two array merge make one array
$arr_merge = array_merge($arg1,$arg2);
print_r($arr_merge);