<?php 
// database create
include 'connection.php';
$sql = "CREATE DATABASE userlogin";

if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>