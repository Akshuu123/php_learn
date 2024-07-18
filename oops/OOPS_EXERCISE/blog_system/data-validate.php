<?php
echo '<pre>';

/**
 * Validate title and content is available
 */

if (isset($_POST['title']) && isset($_POST['content'])) {

    include 'class-post.php';
    $post = new Post($_POST['title'], $_POST['content'], $_POST['author']);

    $post->the_post_content();

} else {
    echo '<script> alert("Please Fill All Details")
    location.href="http://localhost/php/oops/OOPS_EXERCISE/blog_system/"
    </script>';
}
