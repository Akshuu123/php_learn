<?php
require 'index.php';
?>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$gender = $_POST['gender'];

if ($name && $email && $gender  !== $name && $email && $gender) {
    echo "YOur name is $name <br>
    Your Email is $email <br>
    Your Gender is $gender ";
} else {
    echo 'all field required';
}
?>