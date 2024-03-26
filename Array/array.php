<?php
echo '<pre>';
$arr = array(
    'akshay' => 'vishal',
    'acer' => 'mouse'
);
$arr = array_change_key_case($arr, CASE_UPPER);
// print_r($arr);  


/** Implode Function array ko string me convert */
$implode = array('This', 'table');
// print_r(implode( " is " , $implode )); 


/** Array Chunk */
$cars = array("Volvo", "BMW", "Toyota", "Honda", "Mercedes", "Ferari");
// print_r(array_chunk($cars,3));  //3 ke chunk me store data


/** Array Column */
$data = array(
    array(
        'id' => 5698,
        'first_namemm' => 'Peter',
        'last_name' => 'Griffin',
    ),
    array(
        'id' => 4767,
        'first_namemm' => 'Ben',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 3809,
        'first_namemm' => 'Joe',
        'last_name' => 'Doe',
    )
);
// print_r(array_column($data,'id'));
print_r(array_column($data,'first_namemm'));
print_r(array_column($data,'last_name'));


/** is_array()
 * check krta hai array hai ki nhi
 */
if (is_array($arr)) {
    // echo 'This is array';  
} else {
    // echo 'not array';
}


/**in_array()
 * check krta hai ki array me desired value hai
 */
$in_array = array('akshay', 'chauhan', 'acer');
if (in_array('akshay', $in_array)) {
    // echo 'hai value';
} else {
    // echo 'nhi hai';
};


/** Array column method use with foreach loop */
if (array_column($data, 'first_name')) {
    foreach ($data as $data) {
        print_r($data['first_name']);
    }
} else {
    echo 'nhi h';
}


// 