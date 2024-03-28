<?php
// conver array to php and add 'value' between them

include 'strings.php';
print_r($arr);

$imp_str =implode('_',$arr);
echo $imp_str;