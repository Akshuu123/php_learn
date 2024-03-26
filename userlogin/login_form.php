<!-- this is login form -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login_process.php" method="post">
        <label>Email</label>:
        <input type="email" placeholder="Enter Your Email" name="email"><br>
        <label>Password</label>:
        <input type="password" placeholder="Enter Your Password"><br>
        <input type="submit">
        <button type="button"><a href="./register.php">New User ?</a></button>
    </form>
</body>
</html>