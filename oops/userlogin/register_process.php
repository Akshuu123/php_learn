<!-- register process -->
<?php
include './db/connection.php';

// get data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

// data ko safe rakhne k liye
$name = mysqli_real_escape_string($conn, $name);
$email = mysqli_real_escape_string($conn, $email);
$password = mysqli_real_escape_string($conn, $password);


// simple data add kiya 
$sqll = "INSERT INTO table1 (name, email, password) VALUES ('$name ','$email' ,'$password')";
if ($conn->query($sqll) == TRUE) {
    echo 'data added sucessfullly';
    
    header('login_form.php');
} else {
    "ERROR" . $conn->error;
}
?>