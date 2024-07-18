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
// count and sizeof do same task
// print_r(count($arr));

// print_r(sizeof($arr));
// print_r($arr);

/**Advance */
$updatearr = array(
    'newname' => 'newvalue'
);

foreach ($arr as  &$innerarray) {
    $innerarray = array_merge($innerarray, $updatearr);
}

print_r($arr);
