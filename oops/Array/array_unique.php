<?php
// return only unique value with (SORTING)
$arr = array(
    'first',
    'second',
    'third',
    'third',
    'fourth',
    'fifth'
);

$arr_uniq = array_unique($arr, SORT_REGULAR);
print_r($arr_uniq);
