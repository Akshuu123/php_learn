<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php $pagename =  pathinfo(basename($_SERVER['REQUEST_URI']))['filename']; ?>

<body class="<?php echo $pagename ?>">
    <main>
        <h1>Forgot Password</h1>
        <form action="forgot.php" method="post">
            <Label for="username">Username</Label>
            <input type="text" name="username" placeholder="Enter Username">
            <input type="text" name="password" placeholder="New Password">
            <input type="submit" value="Submit">
        </form>
    </main>
</body>

</html>
<?php
// include connection
include './conn.php';
if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
}

if ($_SERVER['REQUEST_METHOD'] === "POST" && !empty($username) && !empty($password)) {
    $my_query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($my_query);

    // query is matched
    if ($result->num_rows > 0) {
        foreach ($result as $user) {

            // update password
            $update_query = "UPDATE users SET pass = '$password' WHERE username='$username'";
            $result = $conn->query($update_query);
            if ($result) {
                echo '<h3 class="success">Password Change Successfully <a href="login.php">Back To Login</a></h3>';
            }
        }
    } else {
        echo "<h3>Invalid User Name </h3>";
    }
} else {
    echo "<h3>All Field Required </h3>";
}
?>