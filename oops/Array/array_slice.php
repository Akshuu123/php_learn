<?php
// arrayslice first argument array, second argument slice start from (index), third slice end to (index)
$arr = ['first', 'second', 'third', 'fourth', 'fifth', 'sixth'];
print_r($arr);


$arr_slice = array_slice($arr, 1, 4);
print_r($arr_slice);
