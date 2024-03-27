<?php
echo '<pre>';
$arr = [
    array(
        'firstName' => 'akshay',
        'lastName' => 'chauhan',
    ),
    array(
        'firstName' => 'atul',
        'lastName' => 'sharma'
    ),
    array(
        'firstName' => 'gurmeet',
        'lastName' => 'singh'
    )
];
// print_r($arr);
foreach ($arr as $key => $innerarray) {
    // print_r(array_keys($innerarray));
    print_r(array_keys($innerarray));
}
