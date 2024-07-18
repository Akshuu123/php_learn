<?php
include_once 'createconnection.php';
error_reporting(0);
echo '<pre>';
$name = $_POST['name'];
$password = $_POST['password'];
if (isset($_POST['submit'])) {
    // $media = $_FILES['file']['tmp_name'];
    print_r($_FILES);
   
}else{
    echo 'data not submitted';
}

print_r($media);

// $sql = "INSERT INTO  form(username,passcode,media) VALUES ('$name', '$password')";

// $result = $conn->query($sql);
// // print_r($result);
// if ($conn->query($sql) === TRUE) {
//     echo 'data added successfullly';
//     echo 
//     '<script>
//     alert("data added sucessfully")
//     window.location="/php/phpbasic/form2/";
//     </script>
//     ';
// } else {
//     echo 'error' . $conn->error;
// }
