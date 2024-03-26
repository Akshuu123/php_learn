<?php
echo '<pre>';
print_r($GLOBALS);

exit();

// superglobals
$server_name = $_SERVER['SERVER_NAME'];
$file_name = $_SERVER['PHP_SELF'];
$server_admin = $_SERVER['SERVER_ADMIN'];

echo $server_name . '<br>';
echo "File Name is $file_name <br>";
echo "Script Uri $server_admin <br>";



$info = readfile('myfile.txt');
echo $info;


// create a new file with php
$myfile = fopen('myfile.txt', 'w') or die('unable to open file');
$txt = "My name is Akshay Chauhan\n";
fwrite($myfile, $txt);
fwrite($myfile, " This is second line and " );

fclose($myfile);