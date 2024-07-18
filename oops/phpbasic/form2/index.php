<!-- verifying password and make session -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Form</title>
</head>

<body>
    <form action="upload.php" method="post">
        <label for="file">File</label>
        <input type="file" name="filename" accept="image"><br>
        <label for="name">Name</label>
        <input type="text" name="name"><br>
        <label for="password">Password</label>
        <input type="password" name="password"><br>
        <input type="submit"name="submit" value="submit">
    </form>
</body>

</html>

<?php
