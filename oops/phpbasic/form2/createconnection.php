<?php
$servername = "localhost";
$username = 'root';
$database = "fileupload";
$password = '';
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    echo 'connection failed' . $conn->connect_errno;
} else {
    echo 'connection succsuessfull';
}
