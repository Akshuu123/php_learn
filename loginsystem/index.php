<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<?php $pagename =  pathinfo(basename($_SERVER['REQUEST_URI']))['filename']; ?>
<body class="<?php echo $pagename; ?>">
    <main>
        <h1>Register User</h1>
        <form method="post">
            <label for="username">Username</label>
            <br><input type="text" name="username" class="username" autocomplete="off" required><br>
            <label for="password">Password</label>
            <input type="password" name="password" class="password" autocomplete="off" required><br>
            <input type="submit" value="Submit">
            <a href="login.php">Already Registered ?</a>
        </form>
    </main>
</body>

</html>

<?php
// error_reporting(0);
include './conn.php'; //include conn


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password']; // Hash the password

    // Check if the username already exists
    $sql_check = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql_check);

    if ($result->num_rows > 0) {
        echo "<script>
                alert('Username already registered');
            </script>";
    } else {
        // Insert new user
        $sql = "INSERT INTO users (username, pass) VALUES ('$username', '$password')";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
                alert('Registration Successful');
                location.href = 'login.php';
            </script>";
        }
    }
}
?>