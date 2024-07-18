<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dashboard</title>
</head>
<?php $pagename =  pathinfo(basename($_SERVER['REQUEST_URI']))['filename']; ?>

<body class="<?php echo $pagename ?>">
    <section>
        <h1>Hello , <?php echo $_SESSION['username']; ?></h1>
        <div class="panel_main">
            <div class="panel">
                <ul>
                    <li>All Posts</li>
                    <li>Edit Account</li>
                    <li>Notices</li>
                    <li><a href="logout.php">LogOut</a></li>
                </ul>
            </div>
            <div class="option">Option
            </div>
        </div>
    </section>
</body>

</html>