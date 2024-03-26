<?php
// check connction
$conn = new mysqli('localhost', 'root', '', 'userlogin');
if (!$conn->connect_error) {
    echo 'connection successfull';
}

$sql = "CREATE TABLE table1 (
    id INT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL
)";
if($conn->query($sql)){
    echo "table create ho gya";
}else {
    
}

$conn->close();

