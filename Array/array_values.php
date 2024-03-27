<?php

/**array_value is used for get the values of array */
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
print_r($arr);


foreach ($arr as $key => $value) {
    print_r(array_values($value));
}
?>
<? echo 'hi';