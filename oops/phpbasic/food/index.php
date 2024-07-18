<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Food Related</title>
</head>

<body>
    <form method="post" action="index.php">
        <label for="name">name</label>
        <input type="text" name="name">
        <br>
        <label for="Price">Price</label>
        <input type="number" name="price">
        <br>
        <label for="description">description</label>
        <input type="description" name="description">
        <br>
        <label for="addmore">Add more</label>
        <input type="number" name="additional" min="1">
        <br>
        <label for="calorie">calorie</label>
        <input type="calorie" name="calorie">
        <br>
        <input type="submit">
    </form>
    <pre>
</body>

</html>

<?php

include_once 'food/class_foodorder.php';
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];
$calorie = $_POST['calorie'];
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    if ($_POST == '') {
        return false;
    } else {
        $burger = new FoodItem($name, $price, $description, $calorie);
        // print_r($burger->displayDetails());

        // $burger2= new FoodOrder('2','Akshay');
        print_r($burger->displayDetails());
    }
}