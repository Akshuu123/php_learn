<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <label for="firstname">First Name</label>
        <input type="text" name="firstname">
        <br>
        <label for="lastname">Last Name</label>
        <input type="text" name="lastname">
        <br>
        <label for="number">Age</label>
        <input type="number" name="number">
        <br>
        <label for="gender">Gender</label>
        <select name="gender" required>
            <option value="" selected="selected">Please Select</option>
            <option name="male" value="male">Male</option>
            <option name="female" value="female">Female</option>
        </select>
        <input type="submit">
    </form>
</body>

</html>
<?php
include_once 'class_student.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['number'];
$gender = $_POST['gender'];
// echo $gender;
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    echo '<pre>';
    $person1= new Student($firstname,$lastname,$age,$gender,'test@test.com',26);
    print_r($person1->displayDetails());
} else {
    echo 'this is not localhost';
}