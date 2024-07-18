<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<?php $pagename =  pathinfo(basename($_SERVER['REQUEST_URI']))['filename']; ?>

<body class="<?php echo $pagename ?>">
    <main class="main">
        <h1>Login User</h1>
        <form method="post" class="form_reg" action="login.php">
            <label for="username">Username</label>
            <br><input type="text" name="username" class="username" autocomplete="off" required><br>
            <label for="password">Password</label>
            <input type="password" name="password" class="password" autocomplete="off" required><br>
            <input type="submit" value="Submit">
            <a href="index.php">New User ?</a>
        </form>
    </main>

</body>

</html>
<?php

include './conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    $username = $_POST['username'];
    $password = $_POST['password'];

    // check if user is exist
    $my_query = "SELECT * FROM users WHERE username = '$username'";

    $result = $conn->query($my_query);


    // check username exist
    if ($result->num_rows > 0) {

        foreach ($result as $user) {

            // check password match
            if ($user['pass'] === $password) {


                print_r($user['pass']);

                // Session Create
                session_start();
                $_SESSION['username'] = $user['username'];
                header("location:dashboard.php");
            } else {
                echo '<h3>Incorrect Password <a href="forgot.php">Forgot Password ? </a></h3>';
            }
        }
    } else {
        echo '<h3>Incorrect Username</h3>';
    }
}
?>