<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="data-validate.php" class="d-flex flex-column justify-item-between align-items-center gap-2 w-auto border" method="post" >
        <label for="title">Title
            <input type="text" name="title" id="title" required>
        </label>
        
        <label for="content">Content
            <textarea name="content" id="content" required></textarea>
        </label>
        
        <label for="author">Author
            <input type="text" name="author" id="author" required>
        </label>
        <input type="submit" value="Submit">
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>