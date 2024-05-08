<?php

// Define your autoloader function
function my_autoloader($class_name) {
    // Convert class name to file path
    $file_path = __DIR__ . '/' . $class_name . '.php';
    
    // Check if the file exists
    if (file_exists($file_path)) {
        // Require the file
        require_once $file_path;
    }
}

// Register the autoloader function
spl_autoload_register('my_autoloader');
